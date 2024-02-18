<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontedcontroller extends Controller
{
    public function index(Request $request)
    {
    	return view('fronted.index');
    }

    public function about(Request $request)
    {
    	return view('fronted.about');
    }

    public function contact()
    {
    	return view('fronted.contact');
    }

    public function gallery()
    {
    	return view('fronted.gallery');
    }

    public function service()
    {
    	return view('fronted.service');
    }

    public function servicedetails()
    {
        return view('fronted.servicedetails');
    }
}
