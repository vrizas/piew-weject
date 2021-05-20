<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\Location;

class SearchController extends Controller
{
    //

    public function search()
    {
        $kategori = $_GET['kategori'];
        $lokasi = $_GET['lokasi'];
        
        $locations = Location::where('lokasi', 'LIKE', '%'.$lokasi.'%')->get();

        foreach($locations as $location) {
            $restaurants = Restaurant::where('kategori', 'LIKE', '%'.$kategori.'%')
                                      ->where('id_location', '=', $location->id)
                                      ->get();
        }  
        return view('pencarian')->with('restaurants', $restaurants)->with('locations', $locations);   
    }
}
// ->orWhere('alamat', 'LIKE', '%'.$lokasi.'%')
// ['alamat', 'LIKE', '%'.$lokasi.'%'],
// ['id_location', '=', $locations->id],