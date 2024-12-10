<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $properties = Property::limit(6)->get();
       return view('welcome', compact('properties'));
    }

    public function getContact()
    {
        return view('contact');
    }
}
