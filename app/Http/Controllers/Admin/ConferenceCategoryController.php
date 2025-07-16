<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ConferenceCategory;
use App\Models\Setting;
use Exception;
use Illuminate\Http\Request;

class ConferenceCategoryController extends Controller
{
    //

    public function index(){
        $categories = ConferenceCategory::all();
        $settings = Setting::query()->pluck("value", "setting_name")->toArray();
        return view('admin.conference_category.index', compact('categories', 'settings'));
    }

    public function create(){
        $settings = Setting::query()->pluck("value", "setting_name")->toArray();
        return view('admin.conference_category.create', compact('settings'));
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        ConferenceCategory::create($validated);
        return redirect()->route('conference-categories.index')->with('success', 'Tour Category created successfully.');
    }

    public function edit(ConferenceCategory $conference_category)
    {
        $settings = Setting::pluck("value", "setting_name")->toArray();
        return view('admin.conference_category.edit', compact('conference_category', 'settings'));
    }


    public function update(Request $request, ConferenceCategory $conference_category){
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $conference_category->update($validated);
        return redirect()->route('conference-categories.index')->with('success', 'Tour Category updated successfully.');
    }

    public function destroy(ConferenceCategory $conference_category){
        try {
            $conference_category->delete();
            return redirect()->route('conference-categories.index')->with('success', 'Tour Category deleted successfully.');
        } catch (Exception $e) {
            return redirect()->route('conference-categories.index')->with('error', 'Error deleting Tour Category: ' . $e->getMessage());
        }
    }
}
