<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    //

    public function search(Request $request)
    {
        $restaurants = Restaurant::all();
        return view('pencarian')->with('restaurants',$restaurants);
    }
}
