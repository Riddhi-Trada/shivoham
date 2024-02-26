<?php

namespace App\Http\Controllers;
use App\AboutUs;
use App\ContactUs;
use App\Offer;
use App\Testimonial;
use App\HomepageSlider;
use App\Services;
use Illuminate\Http\Request;

class frontedcontroller extends Controller
{
    public function index(Request $request)
    {
        $homepage_slider = HomepageSlider::get();
        $about=AboutUs::first();
        $offer=Offer::get();
        $testimonial=Testimonial::get();
    	return view('fronted.index',compact('homepage_slider','about','offer','testimonial'));
    }

    public function about(Request $request)
    {
        $about=AboutUs::first();
        $offer=Offer::get();
        $testimonial=Testimonial::get();
    	return view('fronted.about',compact('about','offer','testimonial'));
    }

    public function contact()
    {
        $contact=ContactUs::first();
    	return view('fronted.contact',compact('contact'));
    }

    public function gallery()
    {
    	return view('fronted.gallery');
    }

    public function service()
    {
        $services = Services::get();
    	return view('fronted.service',compact('services'));
    }

    public function servicedetails()
    {
        return view('fronted.servicedetails');
    }
}
