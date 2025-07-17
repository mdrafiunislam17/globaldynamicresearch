<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\ConferenceCategory;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\Training;
use App\Models\TrainingCategory;
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

    public function frontendTrainingCategory($slug)
    {
        $settings = Setting::query()->pluck("value", "setting_name")->toArray();

        // ✅ If you want ALL categories
        $trainingCategory = TrainingCategory::all();

        // ✅ If you want ONLY the clicked category
        $selectedCategory = TrainingCategory::all();

        $conferenceCategory = ConferenceCategory::all();

        $training = Training::where('slug', $slug)->firstOrFail();

        return view('frontend.frontendTrainingCategory', compact(
            'settings',
            'trainingCategory',
            'conferenceCategory',
            'selectedCategory',
            'training'
        ));
    }



    public function aboutus()
    {
        $about = About::latest()->first();
        $settings = Setting::query()->pluck("value", "setting_name")->toArray();
        return view('frontend.aboutus',compact('settings','about'));
    }

    public function spss()
    {
        return view('frontend.spss');
    }

    public function workshops()
    {
        return view('frontend.workshops');
    }

    public function seminar()
    {
        return view('frontend.seminar');
    }

    public function ConferenceICAS()
    {
        return view('frontend.ConferenceIcas');
    }

    public function publications()
    {
        return view('frontend.publications');
    }

    public function contactUs(){
        return view('frontend.contactUs');
    }

    public function books(){
        return view('frontend.books');
    }

    public function events(){
        return view('frontend.events');
    }

    public function payment()
    {
        return view('frontend.payment');
    }
}
