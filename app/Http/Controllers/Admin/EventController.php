<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Setting;
use Egulias\EmailValidator\Parser\Comment;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Database\QueryException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;

class EventController extends Controller
{
    //


    private function uploadImage($image): string
    {
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads/event'), $imageName);
        return $imageName;
    }


    private function uploadGalleryImages(array $images): array
    {
        $imageNames = [];

        foreach ($images as $image) {
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/event/gallery'), $imageName);
            $imageNames[] = $imageName;
        }

        return $imageNames;
    }


    public function index(): Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\View\View
    {
        $events = Event::all();
        $settings = Setting::query()->pluck("value", "setting_name")->toArray();
        return view("admin.events.index", compact("events","settings"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function create()
    {
        $settings = Setting::query()->pluck("value", "setting_name")->toArray();
        return view("admin.events.create",compact('settings'));
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
            $event = new Event();
            $event->fill([
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
                $event->image = $this->uploadImage($request->file('image'));
            }

            // Gallery Images Upload
            if ($request->hasFile('gallery_images')) {
                $galleryImages = $this->uploadGalleryImages($request->file('gallery_images'));

                // Save as JSON in DB (optional)
                $event->gallery_images = json_encode($galleryImages);
                $event->save();
            }


            $event->save();
        } catch (QueryException $exception) {
            return redirect()
                ->back()
                ->withInput()
                ->with("error", "QueryException code: " . $exception->getCode());
        }

        return redirect()->route('events.index')->with("success", "Event has been inserted successfully.");
    }

    /**
     * Display the specified resource.
     *
     * @param Event $event
     * @return View
     */
//    public function show(Event $event): View
//    {
//        return view("admin.events.show", compact("event"));
//    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Event $event
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function edit(Event $event)
    {
        $settings = Setting::query()->pluck("value", "setting_name")->toArray();
        return view("admin.events.edit", compact("event","settings"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Event $event
     * @return RedirectResponse
     */
    public function update(Request $request, Event $event): RedirectResponse
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

        $oldImagePath = $event->__get("image");

        try {
            $event->fill([
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
                if ($event->image && Storage::exists('public/uploads/' . $event->image)) {
                    Storage::delete('public/uploads/' . $event->image);
                }

                $event->image = $this->uploadImage($request->file('image'));
            }

            if ($request->hasFile('gallery_images')) {
                $galleryImages = $this->uploadGalleryImages($request->file('gallery_images'));

                // Save as JSON in DB (optional)
                $event->gallery_images = json_encode($galleryImages);
                $event->save();
            }


            $event->save();
        } catch (QueryException $exception) {
            return redirect()->back()->with("error", "QueryException code: " . $exception->getCode());
        }

        return redirect()->route('events.index')->with("success", "Event has been updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Event $event
     * @return RedirectResponse
     */
    public function destroy(Event $event): RedirectResponse
    {
        try {
            // Delete main image if it exists
            if (!empty($event->image) && Storage::exists('public/uploads/' . $event->image)) {
                Storage::delete('public/uploads/' . $event->image);
            }

            // Delete all gallery images if any
            $gallery = json_decode($event->gallery_images, true);
            if (is_array($gallery)) {
                foreach ($gallery as $image) {
                    $path = public_path('uploads/gallery/' . $image);
                    if (file_exists($path)) {
                        unlink($path);
                    }
                }
            }

            // Delete the event
            $event->delete();

            return redirect()->route('events.index')->with("success", "Event has been deleted successfully.");
        } catch (Exception $exception) {
            return redirect()->back()->with("error", "Delete failed: " . $exception->getMessage());
        }
    }
}
