<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Offer;

class OfferController extends Controller
{
    public function index()
    {
        $offer = Offer::get();
        return view('admin.offer_slider.list',compact('offer'));
    }

    public function create()
    {
        $title = 'Add Offer';
        return view('admin.offer_slider.form',compact('title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            // 'image' => 'required',
        ]);

        $slug = $request->title != '' ? Str::slug($request->title, '-') : NULL;
        $offer = new Offer();
    	$offer->title = $request->title;
        $offer->slug = $slug;
    	$offer->description=$request->input('description');
    	if ($request->hasFile('image')) 
        {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/uploads/offer'), $imageName);
            $offer->image = $imageName;
        }
        $offer->save();
        return redirect()->route('offer-list')->with('success','Data Add Successfully..');
    }

    public function edit($id)
    {
        $offer = Offer::find($id);
        $title = 'Edit Offer';
        return view('admin.offer_slider.form',compact('offer','title'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'title' => 'required',
            // 'image' => 'required',
        ]);

        $slug = $request->title != '' ? Str::slug($request->title, '-') : NULL;
        $offer = Offer::find($id);
    	$offer->title = $request->title;
        $offer->slug = $slug;
    	$offer->description=$request->input('description');
    	if ($request->hasFile('image')) 
        {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/uploads/offer'), $imageName);
            $offer->image = $imageName;
        }
        $offer->save();
        return redirect()->route('offer-list')->with('success','Data Update Successfully..');
    }

    public function delete($id)
    {
        $offer = Offer::where('id',$id)->delete();
        if($offer)
        {
            return redirect()->route('offer-list')->with('success','Data Delete Successfully..');
        }
    }
}
