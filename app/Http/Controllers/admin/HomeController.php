<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\HomepageSlider;
class HomeController extends Controller
{
    public function index()
    {
        $slider = HomepageSlider::get();
        return view('admin.home_page_slider.list',compact('slider'));
    }

    public function create()
    {
        $title = 'Add Home Page Slider';
        return view('admin.home_page_slider.form',compact('title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            // 'image' => 'required',
        ]);

        $slider = new HomepageSlider();
    	$slider->title=$request->input('title');
    	$slider->description=$request->input('description');
    	if ($request->hasFile('image')) 
        {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/uploads/slider'), $imageName);
            $slider->image = $imageName;
        }
        $slider->save();
        return redirect()->route('slider-list')->with('success','Data Add Successfully..');
    }

    public function edit($id)
    {
        $slider = HomepageSlider::find($id);
        $title = 'Edit Home Page Slider';
        return view('admin.home_page_slider.form',compact('slider','title'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'title' => 'required',
            // 'image' => 'required',
        ]);

        $slider = HomepageSlider::find($id);
    	$slider->title=$request->input('title');
    	$slider->description=$request->input('description');
    	if ($request->hasFile('image')) 
        {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/uploads/slider'), $imageName);
            $slider->image = $imageName;
        }
        $slider->save();
        return redirect()->route('slider-list')->with('success','Data Update Successfully..');
    }

    public function delete($id)
    {
        $slider = HomepageSlider::where('id',$id)->delete();
        return redirect()->route('slider-list')->with('success','Data Delete Successfully..');
    }

}
