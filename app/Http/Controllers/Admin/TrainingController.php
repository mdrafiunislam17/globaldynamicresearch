<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Conference;
use App\Models\ConferenceCategory;
use App\Models\Setting;
use App\Models\Training;
use App\Models\TrainingCategory;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TrainingController extends Controller
{
    //




    private function uploadImage($image): string
    {
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads/training'), $imageName);
        return $imageName;
    }

    public function index()
    {
        $training = Training::all();
        $settings = Setting::pluck("value", "setting_name")->toArray();
        return view('admin.training.index', compact('training','settings'));
    }

    public function create()
    {
        $trainingCategory = TrainingCategory::all();
        $settings = Setting::pluck("value", "setting_name")->toArray();
        return view('admin.training.create', compact('trainingCategory','settings'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required',
        ]);
        try {
            $training = New Training();

            $training->fill([
                "title" => $request->input("title"),
                "category_id" => $request->input("category_id"),
                "slug" => $request->input("slug"),
                "description" => $request->input("description"),
                "status" => $request->input("status"),
            ]);
            if ($request->hasFile('image')) {
                $training->image = $this->uploadImage($request->file('image'));
            }


            $training->save();
            return redirect()->route('training.index')
                ->with('success', 'Training created successfully.');
        } catch (Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Error: ' . $e->getMessage());
        }
    }

    public function edit(Training $training)
    {
        $trainingCategory = TrainingCategory::all();
        $settings = Setting::pluck("value", "setting_name")->toArray();
        return view('admin.training.edit', compact('training', 'trainingCategory','settings'));
    }

    public function update(Request $request, Training $training)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required',
        ]);

        try {
            $training->fill([
                "title" => $request->input("title"),
                "category_id" => $request->input("category_id"),
                "slug" => $request->input("slug"),
                "description" => $request->input("description"),
                "status" => $request->input("status"),
            ]);

            if ($request->hasFile('image')) {
                // Delete old image if it exists
                if ($training->image && Storage::exists('public/uploads/' . $training->image)) {
                    Storage::delete('public/uploads/' . $training->image);
                }

                $training->image = $this->uploadImage($request->file('image'));
            }

            $training->save();
            return redirect()->route('training.index')
                ->with('success', 'Training updated successfully.');
        } catch (QueryException $e) {
            return redirect()->back()->withInput()->with('error', 'Database error: ' . $e->getMessage());
        }
    }

    public function destroy(Training $training): RedirectResponse
    {
        try {
            if ($training->image && Storage::exists('public/uploads/' . $training->image)) {
                Storage::delete('public/uploads/' . $training->image);
            }

            $training->delete();

            return back()->with('success', 'Conference deleted successfully.');
        } catch (Exception $e) {
            return back()->with('error', 'Error deleting Conference: ' . $e->getMessage());
        }
    }
}
