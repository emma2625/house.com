<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class PageController extends Controller
{
    public function index()
    {
        $properties = Property::latest()->limit(6)->get();
        return view('welcome', compact('properties'));
    }

    public function getContact()
    {
        return view('contact');
    }
    public function getListings()
    {
        $properties = Property::latest()->paginate(9);
        return view('properties', compact('properties'));
    }
    public function viewListing($id)
    {
        $property = Property::findOrFail($id);
        return view('single-property', compact('property'));
    }



    public function sendMessage(Request $request)
    {
        $request->validate([
            'full_name' => "required|string|max:100",
            'location' => "required|string",
            'message' => "required|string"
        ]);


        $data = [
            'name' => $request->input('full_name'),
            'location' => $request->input('location'),
            'message' => $request->input('message')
        ];

        // Send the mail

        Mail::to('admin@house.test')->send(new ContactMail($data));

        Alert::success('Mail Sent Successfully');
        return back();
    }
}
