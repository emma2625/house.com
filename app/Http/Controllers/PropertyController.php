<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $properties = Property::latest()->paginate(9);
        return view('properties.index', compact('properties'));
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
            'picture' => $directory . '/' . $file_name,
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
        $property = Property::findOrFail($id);
        $categories = Category::all();
        return view('properties.edit', compact('property', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $property = Property::findOrFail($id);
        $request->validate([
            'name' => "required|string|max:255",
            'price' => "required|numeric",
            'address' => "required|string",
            'state' => "nullable|string",
            'category' => "required|exists:categories,id",
            'picture' => "nullable|image|mimes:png,jpg,jpeg|max:5120",
            'description' => "required|string",
            'status' => "required|string|in:sale,rent",
        ]);

        if ($request->hasFile('picture')) {

            $current = public_path($property->picture);

            $file = $request->file('picture');
            $ext = $file->extension();
            $file_name = 'file_' . mt_rand() . mt_rand() . '.' . $ext;
            $directory = 'uploads/properties';

            $file->move($directory, $file_name);

            Property::where('id', $id)->update([
                'name' => $request->input('name'),
                'price' => $request->input('price'),
                'address' => $request->input('address'),
                'state' => $request->input('state') ? $request->input('state') : $property->state,
                'status' => $request->input('status'),
                'category_id' => $request->input('category'),
                'picture' => $directory . '/' . $file_name,
                'description' => $request->input('description')
            ]);

            if (File::exists($current)) {
                File::delete($current);
            }
        } else {
            Property::where('id', $id)->update([
                'name' => $request->input('name'),
                'price' => $request->input('price'),
                'address' => $request->input('address'),
                'state' => $request->input('state') ? $request->input('state') : $property->state,
                'status' => $request->input('status'),
                'category_id' => $request->input('category'),
                'description' => $request->input('description')
            ]);
        }

        Alert::toast('Updated Successfully', 'success');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $property = Property::findOrFail($id);
        $current = public_path($property->picture);

        $property->delete();
        if (File::exists($current)) {
            File::delete($current);
        }

        Alert::toast('Deleted Successfully', 'success');
        return back();
    }
}
