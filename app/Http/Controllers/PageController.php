<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $properties = Property::latest()->paginate(9);
       return view('welcome', compact('properties'));
    }

    public function getContact()
    {
        return view('contact');
    }
}
