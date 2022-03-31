<?php

namespace App\Http\Controllers\User;

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
        // Use the Movie model
        // Return movie data 
        // Place all the returned movies into a movie argument, which is passed into the view
        $products = Product::all();
        return view('user.products.index', [
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
        //The Movie that is created will be stored in the database when the user clicks submit
        $request->validate([
            'title' => 'required',
            'description' =>'required|max:25',
            'price' =>'required|decimal|digits:5',
            'date_added' =>'required|date|after:today',
            'brand_id' =>'required|integer|digits:1',
            'type_id' =>'required|integer|digits:1',
            'condition_id' => 'required|integer|digits:1',
            
        ]);

        // if validation passes create the new movie
        $movie = new Product();
        $product->title = $request->input('title');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->date_added = $request->input('date_added');
        $product->brand_id = $request->input('brand_id');
        $product->type_id = $request->input('type_id');
        $product->condition_id = $request->input('condition_id');
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

        return view('user.products.show' , [
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
   // get the movie by ID from the Database
   $product = Product::findOrFail($id);

   // Load the edit view and pass the movie into
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
       // first get the existing movie that the user is updating
       $movie = Movie::findOrFail($id);
       $request->validate([
        'title' => 'required',
        'genre' =>'required|max:25',
        'release_year' =>'required|date|before:today',
        'description' =>'required|max:500',
        'director' =>'required|max:25',
        'age_rating' =>'required|max:25',
        'run_time' => 'required|max:25',
        
       ]);

       // if validation passes then update existing movie
       $movie->title = $request->input('title');
        $movie->genre = $request->input('genre');
        $movie->release_year = $request->input('release_year');
        $movie->description = $request->input('description');
        $movie->director = $request->input('director');
        $product->age_rating = $request->input('age_rating');
        $product->run_time = $request->input('run_time');
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

         return redirect()->route('admin.movies.index');
        
    }
}