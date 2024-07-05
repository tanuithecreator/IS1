<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
             // Fetch all categories from the database
             $categories = Category::all();

             // Pass the categories to the view
             return view('category.index', compact('categories'));
    }
    public function create()
    {
        // Method to show the form to create a new category
        return view('category.create');
    }

    public function store(Request $request)
    {
        // Method to store a newly created category
        $validatedData = $request->validate([
            'item' => 'required|max:255',
            'description' => 'nullable',
            'location' => 'nullable|max:255',
        ]);

        Category::create($validatedData);

        return redirect()->route('cause');
    }

    public function edit(Category $category)
    {
        // Method to show the form to edit a category
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        // Method to update the specified category
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'nullable',
            'location' => 'nullable|max:255',
        ]);

        $category->update($validatedData);

        return redirect()->route('');
    }

    public function destroy($id)
{
    $categories = Categories::findOrFail($id);
    $categories->delete();

    return redirect()->route('category.index')->with('success', 'Donation deleted successfully!');
}
}
