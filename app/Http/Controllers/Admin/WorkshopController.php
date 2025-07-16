<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\Workshop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Mockery\Exception;

class WorkshopController extends Controller
{
    //

    private function uploadImage($image): string
    {
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads/workshop'), $imageName);
        return $imageName;
    }


    public function index()
    {
        $workshop = Workshop::all();
        $settings = Setting::query()->pluck("value", "setting_name")->toArray();

        return view('admin.workshop.index',compact('workshop','settings'));
    }

    public function create()
    {
        $settings = Setting::query()->pluck("value", "setting_name")->toArray();
        return view('admin.workshop.create',compact('settings'));

    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        try {
            $workshop = new Workshop();
            $workshop->fill([
                'title' => $request->input('title'),
                'date' => $request->input('date'),
                'start_time' => $request->input('start_time'),
                'end_time' => $request->input('end_time'),
                'description' => $request->input('description'),
                'status' => $request->input('status')
            ]);


            if ($request->hasFile('image')){
                $workshop->image = $this->uploadImage($request->file('image'));
            }
            $workshop->save();
            return  redirect()->route('workshop.index')
                        ->with('Success','Workshop Submitted Successfully');
        }catch (Exception $error){
            return redirect()->route('workshop.index')->withInput()->with('error', 'Error: ' . $error->getMessage());
        }


    }


    public  function edit(Workshop $workshop)
    {
        $settings = Setting::query()->pluck("value", "setting_name")->toArray();
        return view('admin.workshop.edit',compact('settings','workshop'));
    }


    public function update(Request $request, Workshop $workshop)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        try {
            $workshop->fill([
                'title' => $request->input('title'),
                'date' => $request->input('date'),
                'start_time' => $request->input('start_time'),
                'end_time' => $request->input('end_time'),
                'description' => $request->input('description'),
                'status' => $request->input('status', 1),
            ]);

            if ($request->hasFile('image')) {
                // Delete old image if exists in /public/uploads/workshop/
                if ($workshop->image && File::exists(public_path('uploads/workshop/' . $workshop->image))) {
                    File::delete(public_path('uploads/workshop/' . $workshop->image));
                }

                $workshop->image = $this->uploadImage($request->file('image'));
            }


            $workshop->save();

            return redirect()->route('workshop.index')
                ->with('success', 'Workshop updated successfully.');
        } catch (Exception $error) {
            return redirect()->route('workshop.index')
                ->withInput()
                ->with('error', 'Error: ' . $error->getMessage());
        }
    }





    public function destroy(Workshop $workshop)
    {
        try {
            // ✅ Delete image file if exists
            if ($workshop->image && File::exists(public_path('uploads/workshop/' . $workshop->image))) {
                File::delete(public_path('uploads/workshop/' . $workshop->image));
            }

            // ✅ Delete database record
            $workshop->delete();

            return redirect()->route('workshop.index')
                ->with('success', 'Workshop deleted successfully.');
        } catch (Exception $e) {
            // Optional: log the error if you have logger configured
            Log::error('Workshop deletion failed: ' . $e->getMessage());

            return redirect()->route('workshop.index')
                ->with('error', 'Failed to delete the workshop. Please try again.');
        }
    }



}
