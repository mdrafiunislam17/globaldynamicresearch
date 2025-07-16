<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Publication;
use App\Models\Seminar;
use App\Models\Setting;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

class PublicationController extends Controller
{
    //


    private function uploadImage($image): string
    {
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads/publication'), $imageName);
        return $imageName;
    }


    public function index()
    {
        $publication = Publication::all();
        $settings = Setting::query()->pluck("value", "setting_name")->toArray();

        return view('admin.publication.index',compact('publication','settings'));
    }

    public function create()
    {
        $settings = Setting::query()->pluck("value", "setting_name")->toArray();
        return view('admin.publication.create',compact('settings'));

    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        try {
            $publication = new Publication();
            $publication->fill([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'status' => $request->input('status')
            ]);


            if ($request->hasFile('image')){
                $publication->image = $this->uploadImage($request->file('image'));
            }
            $publication->save();
            return  redirect()->route('publication.index')
                ->with('Success','publication Submitted Successfully');
        }catch (Exception $error){
            return redirect()->route('publication.index')->withInput()->with('error', 'Error: ' . $error->getMessage());
        }


    }


    public  function edit(Publication $publication)
    {
        $settings = Setting::query()->pluck("value", "setting_name")->toArray();
        return view('admin.publication.edit',compact('settings','publication'));
    }


    public function update(Request $request, Publication $publication)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        try {
            $publication->fill([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'status' => $request->input('status', 1),
            ]);

            if ($request->hasFile('image')) {
                // Delete old image if exists in /public/uploads/workshop/
                if ($publication->image && File::exists(public_path('uploads/publication/' . $publication->image))) {
                    File::delete(public_path('uploads/publication/' . $publication->image));
                }

                $publication->image = $this->uploadImage($request->file('image'));
            }


            $publication->save();

            return redirect()->route('publication.index')
                ->with('success', 'publication updated successfully.');
        } catch (Exception $error) {
            return redirect()->route('publication.index')
                ->withInput()
                ->with('error', 'Error: ' . $error->getMessage());
        }
    }





    public function destroy(Publication $publication)
    {
        try {
            // ✅ Delete image file if exists
            if ($publication->image && File::exists(public_path('uploads/publication/' . $publication->image))) {
                File::delete(public_path('uploads/publication/' . $publication->image));
            }

            // ✅ Delete database record
            $publication->delete();

            return redirect()->route('publication.index')
                ->with('success', 'publication deleted successfully.');
        } catch (Exception $e) {
            // Optional: log the error if you have logger configured
            Log::error('publication deletion failed: ' . $e->getMessage());

            return redirect()->route('publication.index')
                ->with('error', 'Failed to delete the Seminar. Please try again.');
        }
    }


}
