<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */



    public function index()
    {
        $category = Category::all();
        return view('add_product', compact('category'));
    }

    public function destroy($categoryID)
    {
        $category = Category::find($categoryID);
        $category->delete();
        return redirect()->back()->with('status','Category Deleted Successfully');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $category = new Category;
        $category->CategoryName = $request->input('categories');
        $category->save();
        return redirect()->back()->with('status','Category Added Successfully');
    }
    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    
}
