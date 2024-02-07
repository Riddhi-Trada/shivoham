<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\AboutUs;

class AboutUsController extends Controller
{
    public function edit()
    {
    	$about_us = AboutUs::first();
    	return view('admin.about_us',compact('about_us'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

    	$about_us=AboutUs::find($request->id);
    	$about_us->title=$request->input('title');
    	$about_us->description=$request->input('description');
    	if ($request->hasFile('image')) 
        {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/uploads/about_us'), $imageName);
            $about_us->image = $imageName;
        }
    	$about_us->save();
        if($about_us){
            return redirect()->route('about-us-edit')->with('success', trans('Data Update Successfully!'));
        } else {
            return redirect()->back()->with('error', trans('Something went wrong, please try again later!'));
        }
    }
}
