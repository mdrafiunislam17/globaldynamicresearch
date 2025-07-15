<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use App\Models\Slider;
use App\Models\Setting;

class SliderController extends Controller
{
    //

    private function uploadImage($image): string
    {
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads/slider'), $imageName);
        return $imageName;
    }


    public function index(): View
    {
        $sliders = Slider::all();
        $settings = Setting::query()->pluck("value", "setting_name")->toArray();
        return view('admin.sliders.index', compact('sliders','settings'));
    }

    public function create(): View
    {
        $settings = Setting::query()->pluck("value", "setting_name")->toArray();

        return view('admin.sliders.create',compact('settings'));
    }

    /*
     *
     */

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'caption' => 'nullable|string',
            'sort'     => 'nullable|integer',
            'status'   => 'nullable|boolean',
            'image'    => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        try {
            $slider = new Slider($validated);

            if ($request->hasFile('image')) {
                $slider->image = $this->uploadImage($request->file('image'));
            }

            $slider->save();

            return redirect()-> route('sliders.index')->with('success', 'Slider has been inserted successfully.');
        } catch (QueryException $e) {
            return back()->withInput()->with('error', 'Database Error (Code: ' . $e->getCode() . ')');
        }
    }

    public function show(Slider $slider): View
    {
        return view('admin.sliders.show', compact('slider'));
    }

    public function edit(Slider $slider): View

    {
        $settings = Setting::query()->pluck("value", "setting_name")->toArray();
        return view('admin.sliders.edit', compact('slider','settings'));
    }

    public function update(Request $request, Slider $slider): RedirectResponse
    {
        $validated = $request->validate([

            'image'    => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'caption' => 'nullable|string',
            'sort'     => 'nullable|integer',
            'status'   => 'nullable|boolean',
        ]);

        try {
            $slider->fill($validated);

            if ($request->hasFile('image')) {
                // Delete old image if it exists
                if ($slider->image && Storage::exists('public/uploads/' . $slider->image)) {
                    Storage::delete('public/uploads/' . $slider->image);
                }

                $slider->image = $this->uploadImage($request->file('image'));
            }

            $slider->save();

            return redirect()-> route('sliders.index')->with('success', 'Slider updated successfully.');
        } catch (QueryException $e) {
            return back()->withInput()->with('error', 'Database Error (Code: ' . $e->getCode() . ')');
        }
    }

    public function destroy(Slider $slider): RedirectResponse
    {
        try {
            if ($slider->image && Storage::exists('public/uploads/' . $slider->image)) {
                Storage::delete('public/uploads/' . $slider->image);
            }

            $slider->delete();

            return back()->with('success', 'Slider deleted successfully.');
        } catch (Exception $e) {
            return back()->with('error', 'Error deleting slider: ' . $e->getMessage());
        }
    }
}
