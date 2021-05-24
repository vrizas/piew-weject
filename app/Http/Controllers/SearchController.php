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

        $location = Location::where('lokasi', 'LIKE', '%' . $lokasi . '%')->first();

        $restaurants = Restaurant::where('kategori', 'LIKE', '%' . $kategori . '%')
            ->where('id_location', '=', $location->id)
            ->get();

        return view('pencarian')->with('restaurants', $restaurants)->with('location', $location);
    }
}
// ->orWhere('alamat', 'LIKE', '%'.$lokasi.'%')
// ['alamat', 'LIKE', '%'.$lokasi.'%'],
// ['id_location', '=', $locations->id],