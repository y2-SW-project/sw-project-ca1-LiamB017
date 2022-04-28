<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//Allow index to use Product model
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        // 
    public function index()
    {
        // Use the product model
        // Return product data 
        // Place all the returned products into a product argument, which is passed into the view
        $products = Product::all();
        return view('admin.products.index', [
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //The product that is created will be stored in the database when the user clicks submit
        $request->validate([
            'title' => 'required',
            'description' =>'required|max:25',
            'price' =>'required|max:25',
            'date_added' =>'required|date|after:today',
            'brand_id' =>'required|integer|digits:1',
            'type_id' =>'required|integer|digits:1',
            'condition_id' => 'required|integer|digits:1',
            'image_id' => 'required|integer|digits:1',
            
        ]);

        // if validation passes create the new product
        $product = new Product();
        $product->title = $request->input('title');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->date_added = $request->input('date_added');
        $product->brand_id = $request->input('brand_id');
        $product->type_id = $request->input('type_id');
        $product->condition_id = $request->input('condition_id');
        $product->image_id = $request->input('image_id');
        $product->save();

        // Once new product is created, redirect to display all products
        return redirect()->route('admin.products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Get the product from the database, load the show view and pass in the product
        $product = Product::findOrFail($id);

        return view('admin.products.show' , [
            'product' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
   // get the product by ID from the Database
   $product = Product::findOrFail($id);

   // Load the edit view and pass the product into
   // that view
   return view('admin.products.edit', [
       'product' => $product
    ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       // first get the existing product that the user is updating
       $product = Product::findOrFail($id);
       $request->validate([
        'title' => 'required',
        'description' =>'required|max:25',
        'price' =>'required|max:25',
        'date_added' =>'required|date|after:today',
        'brand_id' =>'required|integer|digits:1',
        'type_id' =>'required|integer|digits:1',
        'condition_id' => 'required|integer|digits:1',
        'image_id' => 'required|integer|digits:1',
        
       ]);

       // if validation passes then update existing product
       $product->title = $request->input('title');
       $product->description = $request->input('description');
       $product->price = $request->input('price');
       $product->date_added = $request->input('date_added');
       $product->brand_id = $request->input('brand_id');
       $product->type_id = $request->input('type_id');
       $product->condition_id = $request->input('condition_id');
       $product->image_id = $request->input('image_id');
       $product->save();

       return redirect()->route('admin.products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Get the selected product from the database by ID
        // Delete the selected product and return to index page
        $product = Product::findOrFail($id);
        $product->delete();

         return redirect()->route('admin.products.index');
        
    }
}