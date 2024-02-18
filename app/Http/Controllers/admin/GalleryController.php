<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Gallery;
class GalleryController extends Controller
{
    public function index()
    {
        $gallery = Gallery::get();
        return view('admin.gallery.list',compact('gallery'));
    }

    public function create()
    {
        $title = 'Add Gallery';
        return view('admin.gallery.form',compact('title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required',
        ]);

        $gallery = new Gallery();
    	$gallery->name=$request->input('name');
    	if ($request->hasFile('image')) 
        {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/uploads/gallery'), $imageName);
            $gallery->image = $imageName;
        }
        $gallery->save();
        return redirect()->route('gallery-list')->with('success','Data Add Successfully..');
    }

    public function edit($id)
    {
        $gallery = Gallery::where('id',$id)->first();
        $title = 'Edit Gallery';
    	return view('admin.gallery.form',compact('gallery','title'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required',
        ]);

        $gallery = Gallery::find($id);
    	$gallery->name=$request->input('name');
    	if ($request->hasFile('image')) 
        {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/uploads/gallery'), $imageName);
            $gallery->image = $imageName;
        }
        $gallery->save();
        return redirect()->route('gallery-list')->with('success','Data Update Successfully..');
    }

    public function delete($id)
    {
        $gallery = Gallery::where('id',$id)->delete();
        return redirect()->route('gallery-list')->with('success','Data Delete Successfully..');
    }
}
