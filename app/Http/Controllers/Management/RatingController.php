<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\User;
use App\Models\Rating;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;


class RatingController extends Controller
{
    public function indexProfile($id)
    {
        $restaurant = Restaurant::all();
        $restaurant = Restaurant::Where('id', $id)->first();
        return view('profil-bisnis')->with('restaurant',$restaurant);
    
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
        
        // $users = User::Where('id',$rating->id_user)->name;
        $ratings = Rating::latest()->take(5)->get();

        // foreach($ratings as $rating){
        //     $users = User::Where('id',$rating->id_user)->name;
        // }
        

        return view('profil-bisnis')->with('restaurant',$restaurant)->with('ratings', $ratings);

    }

    public function avgRating($id_restaurant)
    {
        $rating = Rating::Where('id_restaurant',$id_restaurant)->avg('rating');

        $restaurant = Restaurant::find($id_restaurant);
        $restaurant->rating =$rating;
        $restaurant->save();

    }

}
