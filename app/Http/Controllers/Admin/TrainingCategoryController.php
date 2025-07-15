<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\TrainingCategory;
use Exception;
use Illuminate\Http\Request;

class TrainingCategoryController extends Controller
{
    //

    public function index(){
        $categories = TrainingCategory::all();
        $settings = Setting::query()->pluck("value", "setting_name")->toArray();
        return view('admin.training_categories.index', compact('categories', 'settings'));
    }

    public function create(){
        $settings = Setting::query()->pluck("value", "setting_name")->toArray();
        return view('admin.training_categories.create', compact('settings'));
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        TrainingCategory::create($validated);
        return redirect()->route('training-categories.index')->with('success', 'Tour Category created successfully.');
    }
    public function edit(TrainingCategory $training_category)
    {
        $settings = Setting::pluck("value", "setting_name")->toArray();
        return view('admin.training_categories.edit', compact('training_category', 'settings'));
    }


    public function update(Request $request, TrainingCategory $training_category){
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $training_category->update($validated);
        return redirect()->route('training-categories.index')->with('success', 'Tour Category updated successfully.');
    }

    public function destroy(TrainingCategory $training_category){
        try {
            $training_category->delete();
            return redirect()->route('training-categories.index')->with('success', 'Tour Category deleted successfully.');
        } catch (Exception $e) {
            return redirect()->route('training-categories.index')->with('error', 'Error deleting Tour Category: ' . $e->getMessage());
        }
    }
}
