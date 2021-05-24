<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\Location;
use App\Models\Rating;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use DB;


class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurants = Restaurant::Where('rating','>=','4')
                    ->take(4)
                    ->get();

        $padangs = Restaurant::Where('kategori','LIKE','padang')
                    ->take(4)
                    ->get();
        return view('home')->with('restaurants',$restaurants)->with('padangs', $padangs);
    }

    public function indexBisnis($id)
    {
        $restaurants = Restaurant::all();
        $restaurants = DB::table('restaurants')
                    ->join('locations', 'restaurants.id_location', '=', 'locations.id')
                    ->select('restaurants.id','restaurants.nama', 'restaurants.rating', 'restaurants.alamat', 'restaurants.jamBuka', 'restaurants.jamTutup', 'restaurants.image', 'restaurants.kategori', 'restaurants.deskripsi', 'locations.lokasi')
                    ->Where('restaurants.id', $id)
                    ->get();
        $ratings = DB::table('ratings')
                    ->join('users', 'ratings.id_user', '=', 'users.id')
                    ->select('ratings.rating', 'ratings.pesan', 'ratings.created_at', 'users.name')
                    ->latest()
                    ->take(5)
                    ->get();
        if(Auth::user()->id == $id) {
            return view('bisnis.bisnis')->with('restaurants',$restaurants)->with('ratings', $ratings);
        } else {
            return redirect('profile/'.$id);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $restaurant = Restaurant::find($id);
        $locations = Location::all();
        return view('bisnis.create-business')->with('restaurant',$restaurant)->with('locations',$locations);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $restaurant = Restaurant::find($id);
        $locations = Location::all();
        return view('bisnis.update-business')->with('restaurant',$restaurant)->with('locations',$locations);
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

        $restaurant = Restaurant::find($request->id);
    
        $imageName = "noimage.png";

        //jika user upload image
        if($request->image){
            $request->validate([
                'image' => 'nullable|file|image|mimes:jpeg,png,jpg|max:5000'
            ]);
            $imageName = date('d-m-Y').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('img/bisnis_images'),$imageName);
        }
        
        
        
        $restaurant->image=$imageName;
        $restaurant->nama=$request->nama;
        $restaurant->alamat=$request->alamat;
        $restaurant->id_location=$request->id_location;
        $restaurant->kategori=$request->kategori;
        $restaurant->deskripsi=$request->deskripsi;
        $restaurant->jamBuka=$request->jamBuka;
        $restaurant->jamTutup=$request->jamTutup;
        $restaurant->save();

        $restaurants = Restaurant::all();
        $restaurants = DB::table('restaurants')
                    ->join('locations', 'restaurants.id_location', '=', 'locations.id')
                    ->select('restaurants.id','restaurants.nama', 'restaurants.rating', 'restaurants.alamat', 'restaurants.jamBuka', 'restaurants.jamTutup', 'restaurants.image', 'restaurants.kategori', 'restaurants.deskripsi', 'locations.lokasi')
                    ->Where('restaurants.id', $id)
                    ->get();
        $ratings = DB::table('ratings')
                    ->join('users', 'ratings.id_user', '=', 'users.id')
                    ->select('ratings.rating', 'ratings.pesan', 'ratings.created_at', 'users.name')
                    ->latest()
                    ->take(5)
                    ->get();

        return view('bisnis.bisnis')->with('restaurants',$restaurants)->with('ratings', $ratings);
    }
}
