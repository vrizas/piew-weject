<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\User;
use App\Models\Rating;
use App\Models\Menu;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;
use DB;


class RatingController extends Controller
{
    public function indexProfile($id)
    {
        $restaurant = Restaurant::all();
        $restaurant = DB::table('restaurants')
                    ->join('locations', 'restaurants.id_location', '=', 'locations.id')
                    ->select('restaurants.id','restaurants.nama', 'restaurants.rating', 'restaurants.alamat', 'restaurants.jamBuka', 'restaurants.jamTutup', 'restaurants.image', 'restaurants.kategori', 'restaurants.deskripsi', 'locations.lokasi')
                    ->Where('restaurants.id', $id)
                    ->first();
        $ratings = DB::table('ratings')
                    ->join('users', 'ratings.id_user', '=', 'users.id')
                    ->select('ratings.rating', 'ratings.pesan', 'ratings.created_at', 'users.name')
                    ->Where('id_restaurant', $id)
                    ->latest()
                    ->take(5)
                    ->get();
        $menus = Menu::Where('id_restaurant', Auth::id())->get();
        $cek = Rating::Where('id_user', Auth::id())
                    ->Where('id_restaurant', $id)
                    ->first();
        return view('profil-bisnis')->with('restaurant',$restaurant)->with('ratings', $ratings)->with('menus', $menus)->with('cek', $cek);
    }

    public function store(Request $request, $id)
    {
    
        $id_user = Auth::user()->id;
        $restaurant = Restaurant::find($id);

        $request->validate([
            'pesan' => 'required|min:3',
            ''
        ]);

        $rating = new Rating();
        $rating->id_user =$id_user;
        $rating->id_restaurant =$restaurant->id;
        $rating->rating =$request->rating;
        $rating->pesan =$request->pesan;
        $rating->save();

        $this->avgRating($id);

        $restaurant = Restaurant::all();
        $restaurant = Restaurant::Where('id', $id)->first();
        
        indexProfile($id);

    }

    public function avgRating($id_restaurant)
    {
        $rating = Rating::Where('id_restaurant',$id_restaurant)->avg('rating');

        $restaurant = Restaurant::find($id_restaurant);
        $restaurant->rating =$rating;
        $restaurant->save();

    }

}
