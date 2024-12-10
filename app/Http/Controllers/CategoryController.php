<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class CategoryController extends Controller
{


    public function __construct()
    {
        $this->middleware(['auth', 'permit.admin']);
    }

    public function index()
    {
        $categories = Category::all();

        return view('categories.index', compact('categories'));
    }
    public function create()
    {

        return view('categories.create');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);


        return view('categories.edit', compact('category'));
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
    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $request->validate([
            'name' => "required|string|max:255|unique:categories,name,{$id}",
        ]);

        Category::where('id', $id)->update([
            'name' => $request->input('name')
        ]);

        Alert::toast('Updated Successfully', 'success');
        return back();
    }

    public function destroy($id) {
        Category::where('id', $id)->delete();
        
        Alert::toast('Deleted Successfully', 'success');
        return back();
    }
}
