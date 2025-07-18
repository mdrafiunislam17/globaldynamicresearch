<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Conference;
use App\Models\ConferenceCategory;
use App\Models\Publication;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\Training;
use App\Models\TrainingCategory;
use App\Models\Workshop;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
     public function index()
    {
        $sliders = Slider::where('status',1)
                            ->get();

        $settings = Setting::query()->pluck("value", "setting_name")->toArray();

        $trainingCategory = TrainingCategory::all();

        $conferenceCategory = ConferenceCategory::all();



         return view('frontend.index',
             compact('sliders','settings','trainingCategory',
             'conferenceCategory'));
    }

    public function frontendTrainingCategory(Request $request, $name)
    {
        $settings = Setting::query()->pluck("value", "setting_name")->toArray();

        // All categories for the sidebar/menu
        $trainingCategory = TrainingCategory::all();

        // Find the selected category by name (assumes 'name' is unique)
        $category = TrainingCategory::where('name', $name)->firstOrFail();

        // Only trainings that belong to the selected category
        $allLocations  = Training::where('category_id', $category->id);
        $training = $allLocations->first();

        $conferenceCategory = ConferenceCategory::all();

        return view('frontend.frontendTrainingCategory', compact(
            'settings',
            'trainingCategory',
            'conferenceCategory',
            'category',
            'training'
        ));
    }




    public function aboutus()
    {
        $about = About::latest()->first();
        $settings = Setting::query()->pluck("value", "setting_name")->toArray();

        // All categories for the sidebar/menu
        $trainingCategory = TrainingCategory::all();
        $conferenceCategory = ConferenceCategory::all();
        return view('frontend.aboutus',compact('settings','about','trainingCategory','conferenceCategory'));
    }

    public function spss()
    {
        return view('frontend.spss');
    }

    public function workshops()
    {
        $settings = Setting::query()->pluck("value", "setting_name")->toArray();

        // All categories for the sidebar/menu
        $trainingCategory = TrainingCategory::all();
        $conferenceCategory = ConferenceCategory::all();
        $workshops = Workshop::all();
        return view('frontend.workshops',compact('settings','trainingCategory','conferenceCategory','workshops'));
    }

    public function seminar()
    {
        return view('frontend.seminar');
    }

    public function ConferenceICAS(Request $request, $name)
    {
        $settings = Setting::query()->pluck("value", "setting_name")->toArray();

        // All categories for the sidebar/menu
        $trainingCategory = TrainingCategory::all();
        $conferenceCategory = ConferenceCategory::all();

        // Find the selected category by name (assumes 'name' is unique)
        $category = ConferenceCategory::where('name', $name)->firstOrFail();

        // Only trainings that belong to the selected category
        $allLocations  = Conference::where('category_id', $category->id);
        $conference = $allLocations->first();


        return view('frontend.ConferenceIcas',compact('settings','trainingCategory','conference','conferenceCategory'));
    }

    public function publications()
    {

        $settings = Setting::query()->pluck("value", "setting_name")->toArray();

        // All categories for the sidebar/menu
        $trainingCategory = TrainingCategory::all();
        $conferenceCategory = ConferenceCategory::all();
        $publications =Publication::all();
        return view('frontend.publications',compact('settings','trainingCategory','conferenceCategory','publications'));
    }

    public function contactUs(){
        $settings = Setting::query()->pluck("value", "setting_name")->toArray();

        // All categories for the sidebar/menu
        $trainingCategory = TrainingCategory::all();
        $conferenceCategory = ConferenceCategory::all();
        return view('frontend.contactUs',compact('settings','trainingCategory','conferenceCategory'));
    }

    public function books(){
        return view('frontend.books');
    }

    public function events(){
        return view('frontend.events');
    }

    public function payment()
    {
        $settings = Setting::query()->pluck("value", "setting_name")->toArray();

        // All categories for the sidebar/menu
        $trainingCategory = TrainingCategory::all();
        $conferenceCategory = ConferenceCategory::all();
        return view('frontend.payment',compact('settings','trainingCategory','conferenceCategory'));
    }
}
