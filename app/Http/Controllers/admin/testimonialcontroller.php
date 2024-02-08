<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Testimonial;

class testimonialcontroller extends Controller
{
	public function index()
	{
		$testimonial=Testimonial::get();
    	return view('admin.testimonial.list',compact('testimonial'));		
	}

	public function create()
	{
		$title = 'Add Testimonial';
		return view('admin.testimonial.form',compact('title'));
	}

	public function store(Request $request)
	{
		$testimonial = new Testimonial;
		$testimonial->name=$request->input('name');
		$testimonial->description=$request->input('description');
		if ($request->hasFile('image')) 
        {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/uploads/testimonial'), $imageName);
            $testimonial->image = $imageName;
        }
        $testimonial->save();
        return redirect()->route('testimonial-list')->with('success','Data Add Successfully..');
	}

	public function edit($id)
	{
		$title = 'Edit Testimonial';
		$testimonial=Testimonial::where('id',$id)->first();
		return view('admin.testimonial.form',compact('testimonial','title'));
	}

	public function update(Request $request)
	{
		$testimonial= Testimonial::find($request->id);
		$testimonial->name=$request->input('name');
		$testimonial->description=$request->input('description');
		if ($request->hasFile('image')) 
        {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/uploads/testimonial'), $imageName);
            $testimonial->image = $imageName;
        }
        $testimonial->save();
        return redirect()->route('testimonial-list')->with('success','Data Add Successfully..');
	}

	public function delete($id)
	{
		Testimonial::where('id',$id)->delete();
		return redirect()->route('testimonial-list')->with('success','Data Deleted Successfully');

	}
	
}
