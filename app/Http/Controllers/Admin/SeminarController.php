<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Seminar;
use App\Models\Setting;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

class SeminarController extends Controller
{
    //


    private function uploadImage($image): string
    {
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads/seminar'), $imageName);
        return $imageName;
    }


    public function index()
    {
        $seminar = Seminar::all();
        $settings = Setting::query()->pluck("value", "setting_name")->toArray();

        return view('admin.seminar.index',compact('seminar','settings'));
    }

    public function create()
    {
        $settings = Setting::query()->pluck("value", "setting_name")->toArray();
        return view('admin.seminar.create',compact('settings'));

    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        try {
            $seminar = new Seminar();
            $seminar->fill([
                'title' => $request->input('title'),
                'date' => $request->input('date'),
                'start_time' => $request->input('start_time'),
                'end_time' => $request->input('end_time'),
                'description' => $request->input('description'),
                'status' => $request->input('status')
            ]);


            if ($request->hasFile('image')){
                $seminar->image = $this->uploadImage($request->file('image'));
            }
            $seminar->save();
            return  redirect()->route('seminar.index')
                ->with('Success','seminar Submitted Successfully');
        }catch (Exception $error){
            return redirect()->route('seminar.index')->withInput()->with('error', 'Error: ' . $error->getMessage());
        }


    }


    public  function edit(Seminar $seminar)
    {
        $settings = Setting::query()->pluck("value", "setting_name")->toArray();
        return view('admin.seminar.edit',compact('settings','seminar'));
    }


    public function update(Request $request, Seminar $seminar)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        try {
            $seminar->fill([
                'title' => $request->input('title'),
                'date' => $request->input('date'),
                'start_time' => $request->input('start_time'),
                'end_time' => $request->input('end_time'),
                'description' => $request->input('description'),
                'status' => $request->input('status', 1),
            ]);

            if ($request->hasFile('image')) {
                // Delete old image if exists in /public/uploads/workshop/
                if ($seminar->image && File::exists(public_path('uploads/seminar/' . $seminar->image))) {
                    File::delete(public_path('uploads/seminar/' . $seminar->image));
                }

                $seminar->image = $this->uploadImage($request->file('image'));
            }


            $seminar->save();

            return redirect()->route('seminar.index')
                ->with('success', 'seminar updated successfully.');
        } catch (Exception $error) {
            return redirect()->route('seminar.index')
                ->withInput()
                ->with('error', 'Error: ' . $error->getMessage());
        }
    }





    public function destroy(Seminar $seminar)
    {
        try {
            // ✅ Delete image file if exists
            if ($seminar->image && File::exists(public_path('uploads/seminar/' . $seminar->image))) {
                File::delete(public_path('uploads/seminar/' . $seminar->image));
            }

            // ✅ Delete database record
            $seminar->delete();

            return redirect()->route('seminar.index')
                ->with('success', 'seminar deleted successfully.');
        } catch (Exception $e) {
            // Optional: log the error if you have logger configured
            Log::error('seminar deletion failed: ' . $e->getMessage());

            return redirect()->route('seminar.index')
                ->with('error', 'Failed to delete the Seminar. Please try again.');
        }
    }


}
