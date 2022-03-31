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
        // Use the Movie model
        // Return movie data 
        // Place all the returned movies into a movie argument, which is passed into the view
        $products = Product::all();
        return view('admin.products.index', [
            '[products]' => $products
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
            'release_year' =>'required|date|before:today',
            'description' =>'required|max:500',
            'director' =>'required|max:25',
            'age_rating' =>'required|max:25',
            'run_time' => 'required|max:25',
            
        ]);

        // if validation passes create the new movie
        $movie = new Movie();
        $movie->title = $request->input('title');
        $movie->genre = $request->input('genre');
        $movie->release_year = $request->input('release_year');
        $movie->description = $request->input('description');
        $movie->director = $request->input('director');
        $movie->age_rating = $request->input('age_rating');
        $movie->run_time = $request->input('run_time');
        $movie->save();

        // Once new Movie is created, redirect to display all Movies
        return redirect()->route('admin.movies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Get the movie from the database, load the show view and pass in the movie
        $movie = Movie::findOrFail($id);

        return view('admin.movies.show' , [
            'movie' => $movie
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
   $movie = Movie::findOrFail($id);

   // Load the edit view and pass the movie into
   // that view
   return view('admin.movies.edit', [
       'movie' => $movie
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
