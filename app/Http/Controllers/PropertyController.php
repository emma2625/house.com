<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Property;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('properties.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('properties.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => "required|string|max:255",
            'price' => "required|numeric",
            'address' => "required|string",
            'state' => "required|string",
            'category' => "required|exists:categories,id",
            'picture' => "required|image|mimes:png,jpg,jpeg|max:5120",
            'description' => "required|string",
            'status' => "required|string|in:sale,rent",
        ]);

        # Uploading the file
        $file = $request->file('picture');
        $ext = $file->extension();
        $file_name = 'file_' . mt_rand() . mt_rand() . '.' . $ext;
        $directory = 'uploads/properties';

        $file->move($directory, $file_name);

        # Save to the database

        Property::create([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'address' => $request->input('address'),
            'state' => $request->input('state'),
            'status' => $request->input('status'),
            'category_id' => $request->input('category'),
            'picture' => $directory. '/' . $file_name,
            'description' => $request->input('description')
        ]);

        Alert::toast('Created Successfully', 'success');
        return back();
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
