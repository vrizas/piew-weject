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
        return view('home')->with('restaurants',$restaurants);
    }

    public function indexBisnis($id)
    {
        $restaurant = Restaurant::all();
        $restaurants = Restaurant::Where('id', $id)->get();
        $ratings = DB::table('ratings')
                    ->join('users', 'ratings.id_user', '=', 'users.id')
                    ->select('ratings.rating', 'ratings.pesan', 'ratings.created_at', 'users.name')
                    ->latest()
                    ->take(5)
                    ->get();
        return view('bisnis.bisnis')->with('restaurants',$restaurants)->with('ratings', $ratings);
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        
        // $request->validate([
        //     'nama' => 'required',
        //     'alamat' => 'required',
        //     'id_location' => 'required|numeric',
        //     'kategori' => 'required',
        //     'deskripsi' => 'required',
            
            
        // ]);
    
    
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
        $restaurant->save();

        $restaurants = Restaurant::all();
        $restaurants = Restaurant::Where('id', $request->id)->get();
        $ratings = DB::table('ratings')
                    ->join('users', 'ratings.id_user', '=', 'users.id')
                    ->select('ratings.rating', 'ratings.pesan', 'ratings.created_at', 'users.name')
                    ->latest()
                    ->take(5)
                    ->get();

        return view('bisnis.bisnis')->with('restaurants',$restaurants)->with('ratings', $ratings);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
