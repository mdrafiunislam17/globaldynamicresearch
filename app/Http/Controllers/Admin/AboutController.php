<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Setting;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //

    private function uploadImage($image): string
    {
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads/about'), $imageName);
        return $imageName;
    }

    public function index()
    {
        $abouts = About::all();
        $settings = Setting::query()->pluck("value", "setting_name")->toArray();
        return view('admin.abouts.index',compact('abouts', 'settings'));
    }

    /*
     *
     */

    public function create()
    {
        $settings = Setting::query()->pluck("value", "setting_name")->toArray();
        return view('admin.abouts.create',compact('settings'));

    }

    /*
     *
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        try {
            $about = new About();

            $about->title = $validated['title'];
            $about->description = $validated['description'];

            if ($request->hasFile('image')) {
                $about->image = $this->uploadImage($request->file('image'));
            }



            $about->save();

            return redirect()->route('abouts.index')->with('success', 'About has been inserted successfully.');

        } catch (QueryException $e) {
            return back()->withInput()->with('error', 'Database Error (Code: ' . $e->getCode() . ')');
        }
    }


    public  function edit(About $about )
    {

        $settings = Setting::query()->pluck("value","setting_name")->toArray();
        return view('admin.abouts.edit',compact('about', 'settings'));

    }


    public function update(Request $request, About $about)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        try {
            $about->title = $validated['title'];
            $about->description = $validated['description'];

            if ($request->hasFile('image')) {
                // পুরাতন ইমেজ ডিলিট করতে চাইলে এখানে unlink() বা Storage::delete() ব্যবহার করতে পারেন
                $about->image = $this->uploadImage($request->file('image'));
            }



            $about->save();

            return redirect()->route('abouts.index')->with('success', 'About has been updated successfully.');
        } catch (QueryException $e) {
            return back()->withInput()->with('error', 'Database Error (Code: ' . $e->getCode() . ')');
        }
    }



    public function destroy(About $about)
    {
        try {
            // পুরনো image ফাইল ডিলিট (optional but recommended)
            if ($about->image && file_exists(public_path('uploads/about' . $about->image))) {
                unlink(public_path('uploads/about' . $about->image));
            }


            // ডেটাবেজ থেকে ডিলিট
            $about->delete();

            return redirect()->route('abouts.index')->with('success', 'About has been deleted successfully.');
        } catch (QueryException $e) {
            return back()->with('error', 'Delete failed. Database Error (Code: ' . $e->getCode() . ')');
        }
    }

}
