<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Logo;

class LogoController extends Controller
{
    public function edit()
    {
    	$logo=Logo::first();
    	return view('admin.logo.edit',compact('logo'));
    }

    public function update(Request $request)
    {
    	$logo=Logo::find($request->id);
    	if ($request->hasFile('image')) 
        {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/uploads/logo'), $imageName);
            $logo->logo_image = $imageName;
        }

         if ($request->hasFile('image1')) 
        {
            $image1 = $request->file('image1');
            $imageName1 = time() . '.' . $image1->getClientOriginalExtension();
            $image1->move(public_path('/uploads/logo'), $imageName1);
            $logo->favicon_image = $imageName1;
        }
    	$logo->save();
    	return redirect()->route('logo-edit')->with('success','Data Update Successfully..');
    }
}
