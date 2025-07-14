<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
     public function index()
    {
         return view('frontend.index');
    }


    public function aboutus()
    {
        return view('frontend.aboutus');
    }

    public function stata()
    {
        return view('frontend.stata');
    }

    public function appliedStatistics()
    {
        return view('frontend.appliedStatistics');
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
