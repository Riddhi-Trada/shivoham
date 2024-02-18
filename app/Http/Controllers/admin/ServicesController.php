<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services;
use Illuminate\Support\Str;


class ServicesController extends Controller
{
    public function index()
    {
        $service = Services::get();
        return view('admin.services.list',compact('service'));
    }

    public function create()
    {
        $title = 'Add Service';
        return view('admin.services.form',compact('title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            // 'image' => 'required',
        ]);

        $slug = $request->name != '' ? Str::slug($request->name, '-') : NULL;
        $service = new Services();
    	$service->name = $request->name;
        $service->slug = $slug;
    	$service->description=$request->input('description');
    	if ($request->hasFile('image')) 
        {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/uploads/service'), $imageName);
            $service->image = $imageName;
        }
        $service->save();
        return redirect()->route('service-list')->with('success','Data Add Successfully..');
    }

    public function edit($id)
    {
        $service = Services::find($id);
        $title = 'Edit Service';
        return view('admin.services.form',compact('service','title'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'name' => 'required',
            // 'image' => 'required',
        ]);

        $slug = $request->name != '' ? Str::slug($request->name, '-') : NULL;
        $service = Services::find($id);
    	$service->name = $request->name;
        $service->slug = $slug;
    	$service->description=$request->input('description');
    	if ($request->hasFile('image')) 
        {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/uploads/service'), $imageName);
            $service->image = $imageName;
        }
        $service->save();
        return redirect()->route('service-list')->with('success','Data Update Successfully..');
    }

    public function delete($id)
    {
        $service = Services::where('id',$id)->delete();
        if($service)
        {
            return redirect()->route('service-list')->with('success','Data Delete Successfully..');
        }
    }

}
