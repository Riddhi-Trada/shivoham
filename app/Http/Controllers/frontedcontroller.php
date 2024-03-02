<?php

namespace App\Http\Controllers;
use App\AboutUs;
use App\ContactUs;
use App\Offer;
use App\Testimonial;
use App\HomepageSlider;
use App\Services;
use Illuminate\Http\Request;
use App\contactquery;

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

    public function contactquery(Request $request)
    {
        $contactquery=new contactquery();
        $contactquery->fname=$request->input('fname');
        $contactquery->lname=$request->input('lname');
        $contactquery->email=$request->input('email');
        $contactquery->number=$request->input('number');
        $contactquery->message=$request->input('message');
        $contactquery->save();
        return redirect()->route('contact')->with('message','Inquery Submit Successfully..');
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
