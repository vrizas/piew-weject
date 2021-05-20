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
        
    }
}

// ['alamat', 'LIKE', '%'.$lokasi.'%'],
// ['id_location', '=', $locations->id],