<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('categories.index', compact('categories'));
    }
    public function create()
    {

        return view('categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => "required|string|max:255|unique:categories,name",
        ]);

        Category::create([
            'name' => $request->input('name')
        ]);

        Alert::toast('Created Successfully', 'success');
        return back();
    }
}
