<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\ContactUs;
use App\contactquery;

class ContactUsController extends Controller
{
    public function edit()
    {
    	$contact=ContactUs::first();
    	return view('admin.contact.edit',compact('contact'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'address' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required'
        ]);

    	$contact=ContactUs::find($request->id);
    	$contact->address=$request->input('address');
    	$contact->phone_number=$request->input('phone_number');
    	$contact->email=$request->input('email');
        $contact->instragram=$request->input('instragram');
        $contact->facebook=$request->input('facebook');
        $contact->youtube=$request->input('youtube');
        $contact->map=$request->input('map');
    	$contact->save();
    	// return redirect()->route('contact-edit')->with('success','Data Update Successfully..');
        if($contact){
            return redirect()->route('contact-edit')->with('success', trans('Contact Added Successfully!'));
        } else {
            return redirect()->back()->with('error', trans('Something went wrong, please try again later!'));
        }
    }

    public function contactquery(Request $request)
    {
        $contactquery=contactquery::get();
        return view('admin.contactquery.index',compact('contactquery'));

    }

    public function contactquerydelete($id)
    {
        contactquery::where('id',$id)->delete();
        return redirect()->route('admincontactquery')->with('error', trans('Data Deleted..'));
    }
}
