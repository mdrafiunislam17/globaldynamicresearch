<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use App\Models\Setting;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Database\QueryException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;

class AnnouncementController extends Controller
{
    //



    private function uploadImage($image): string
    {
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads/announcement'), $imageName);
        return $imageName;
    }


    private function uploadGalleryImages(array $images): array
    {
        $imageNames = [];

        foreach ($images as $image) {
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/announcement/gallery'), $imageName);
            $imageNames[] = $imageName;
        }

        return $imageNames;
    }


    public function index(): Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\View\View
    {
        $announcements = Announcement::all();
        $settings = Setting::query()->pluck("value", "setting_name")->toArray();
        return view("admin.announcements.index", compact("announcements","settings"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function create()
    {
        $settings = Setting::query()->pluck("value", "setting_name")->toArray();
        return view("admin.announcements.create",compact('settings'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        // Form Validation
        $request->validate([
            "event_name" => "required",
            "location" => "required",
            "event_date" => "required|date",
            "start_time" => "required",
            "end_time" => "required",
            "email" => "nullable|email",
            "phone" => "nullable",
            "short_description" => "required",
            "description" => "required",
            "image" => "required|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
            "gallery.*" => "nullable|image|mimes:jpeg,png,jpg,gif|max:2048",
        ]);

        try {
            $announcement = new Announcement();
            $announcement->fill([
                "event_name" => $request->input("event_name"),
                "location" => $request->input("location"),
                "event_date" => $request->input("event_date"),
                "start_time" => $request->input("start_time"),
                "end_time" => $request->input("end_time"),
                "email" => $request->input("email"),
                "phone" => $request->input("phone"),
                "location_map" => $request->input("location_map"),
                "short_description" => $request->input("short_description"),
                "description" => $request->input("description"),
                "status" => $request->input("status"),
            ]);

            if ($request->hasFile('image')){
                $announcement->image = $this->uploadImage($request->file('image'));
            }

            // Gallery Images Upload
            if ($request->hasFile('gallery_images')) {
                $galleryImages = $this->uploadGalleryImages($request->file('gallery_images'));

                // Save as JSON in DB (optional)
                $announcement->gallery_images = json_encode($galleryImages);
                $announcement->save();
            }


            $announcement->save();
        } catch (QueryException $exception) {
            return redirect()
                ->back()
                ->withInput()
                ->with("error", "QueryException code: " . $exception->getCode());
        }

        return redirect()->route('announcements.index')->with("success", "Announcement has been inserted successfully.");
    }

    /**
     * Display the specified resource.
     *
     * @param Announcement $announcement
     * @return View
     */
//    public function show(Announcement $announcement): View
//    {
//        return view("admin.announcements.show", compact("event"));
//    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Announcement $announcement
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function edit(Announcement $announcement)
    {
        $settings = Setting::query()->pluck("value", "setting_name")->toArray();
        return view("admin.announcements.edit", compact("announcement","settings"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Announcement $announcement
     * @return RedirectResponse
     */
    public function update(Request $request, Announcement $announcement): RedirectResponse
    {
        // Form Validation
        $request->validate([
            "event_name" => "required",
            "location" => "required",
            "event_date" => "required|date",
            "start_time" => "required",
            "end_time" => "required",
            "email" => "nullable|email",
            "phone" => "nullable",
            "short_description" => "required",
            "description" => "required",
            "image" => "nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
            "gallery.*" => "nullable|image|mimes:jpeg,png,jpg,gif|max:2048",
        ]);

        $oldImagePath = $announcement->__get("image");

        try {
            $announcement->fill([
                "event_name" => $request->input("event_name"),
                "location" => $request->input("location"),
                "event_date" => $request->input("event_date"),
                "start_time" => $request->input("start_time"),
                "end_time" => $request->input("end_time"),
                "email" => $request->input("email"),
                "phone" => $request->input("phone"),
                "location_map" => $request->input("location_map"),
                "short_description" => $request->input("short_description"),
                "description" => $request->input("description"),
                "status" => $request->input("status"),
            ]);

            if ($request->hasFile('image')) {
                // Delete old image if it exists
                if ($announcement->image && Storage::exists('public/uploads/' . $announcement->image)) {
                    Storage::delete('public/uploads/' . $announcement->image);
                }

                $announcement->image = $this->uploadImage($request->file('image'));
            }

            if ($request->hasFile('gallery_images')) {
                $galleryImages = $this->uploadGalleryImages($request->file('gallery_images'));

                // Save as JSON in DB (optional)
                $announcement->gallery_images = json_encode($galleryImages);
                $announcement->save();
            }


            $announcement->save();
        } catch (QueryException $exception) {
            return redirect()->back()->with("error", "QueryException code: " . $exception->getCode());
        }

        return redirect()->route('announcements.index')->with("success", "Announcement has been updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Announcement $announcement
     * @return RedirectResponse
     */
    public function destroy(Announcement $announcement): RedirectResponse
    {
        try {
            // Delete main image if it exists
            if (!empty($announcement->image) && Storage::exists('public/uploads/' . $announcement->image)) {
                Storage::delete('public/uploads/' . $announcement->image);
            }

            // Delete all gallery images if any
            $gallery = json_decode($announcement->gallery_images, true);
            if (is_array($gallery)) {
                foreach ($gallery as $image) {
                    $path = public_path('uploads/gallery/' . $image);
                    if (file_exists($path)) {
                        unlink($path);
                    }
                }
            }

            // Delete the event
            $announcement->delete();

            return redirect()->route('announcements.index')->with("success", "Announcement has been deleted successfully.");
        } catch (Exception $exception) {
            return redirect()->back()->with("error", "Delete failed: " . $exception->getMessage());
        }
    }
}
