<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function getProductData()
    {
        
        $product = product::all();
        return view('product_list', compact('product'));
    }

    public function AddProduct(Request $request)
    {
        //return $request->input();

     
            $product = new product;
            $product->Title = $request->input('title');
            $product->Code = $request->input('code');
            $product->price = $request->input('price');
            $product->quantity = $request->input('qty');
            $product->Description =$request->input('des');
           
    
       
           
        
            //image
            if ($request->hasfile('image')) {
              $img = $request->file('image');
              $ext = rand().".".$img->getClientOriginalName();
              $img->move("Uploadimages/",$ext);
              $product->image =$ext;
             }else{
             $product->image = "";
             }

              $product->categoryID = $request->category_id;
              $product->save();
    
              return redirect()->back()->with('status','product Added Successfully');
        
            
    }


    
    /**
     * Show the form for creating a new resource.
     */
  

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        //
    }
}
