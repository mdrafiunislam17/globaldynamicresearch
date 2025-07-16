<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Conference;
use App\Models\ConferenceCategory;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ConferenceController extends Controller
{
    //



    private function uploadImage($image): string
    {
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads/conference'), $imageName);
        return $imageName;
    }

    public function index()
    {
        $conference = Conference::all();
        return view('admin.conference.index', compact('conference'));
    }

    public function create()
    {
        $conferenceCategory = ConferenceCategory::all();
        return view('admin.conference.create', compact('conferenceCategory'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required',
        ]);
        try {
            $conference = New Conference();

            $conference->fill([
                "title" => $request->input("title"),
                "category_id" => $request->input("category_id"),
                "subtitle" => $request->input("subtitle"),
                "description" => $request->input("description"),
                "status" => $request->input("status"),
            ]);
            if ($request->hasFile('image')) {
                $conference->image = $this->uploadImage($request->file('image'));
            }


            $conference->save();
            return redirect()->route('conference.index')
                ->with('success', 'conference created successfully.');
        } catch (Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Error: ' . $e->getMessage());
        }
    }

    public function edit(Conference $conference)
    {
        $conferenceCategory = ConferenceCategory::all();
        return view('admin.conference.edit', compact('conference', 'conferenceCategory'));
    }

    public function update(Request $request, Conference $conference)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required',
        ]);

        try {
            $conference->fill([
                "title" => $request->input("title"),
                "category_id" => $request->input("category_id"),
                "subtitle" => $request->input("subtitle"),
                "description" => $request->input("description"),
                "status" => $request->input("status"),
            ]);

            if ($request->hasFile('image')) {
                // Delete old image if it exists
                if ($conference->image && Storage::exists('public/uploads/' . $conference->image)) {
                    Storage::delete('public/uploads/' . $conference->image);
                }

                $conference->image = $this->uploadImage($request->file('image'));
            }

            $conference->save();
            return redirect()->route('conference.index')
                ->with('success', 'Conference updated successfully.');
        } catch (QueryException $e) {
            return redirect()->back()->withInput()->with('error', 'Database error: ' . $e->getMessage());
        }
    }

    public function destroy(Conference $conference): RedirectResponse
    {
        try {
            if ($conference->image && Storage::exists('public/uploads/' . $conference->image)) {
                Storage::delete('public/uploads/' . $conference->image);
            }

            $conference->delete();

            return back()->with('success', 'Conference deleted successfully.');
        } catch (Exception $e) {
            return back()->with('error', 'Error deleting Conference: ' . $e->getMessage());
        }
    }
}
