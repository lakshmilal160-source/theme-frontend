<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        return view('frontend.pages.home');
    }

    public function about()
    {
        return view('frontend.pages.about');
    }
    public function contact()
    {
        $themes =[];
        return view('frontend.pages.contact',compact('themes'));
    }
    public function sendEnquiry()
    {
        return view('frontend.pages.home');
    }
}
