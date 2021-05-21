<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\Location;
use App\Models\Rating;


class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurants = Restaurant::all();
        return view('home')->with('restaurants',$restaurants);

    }

    public function indexBisnis($id)
    {
        $restaurants = Restaurant::all();
        $restaurants = Restaurant::Where('id', $id)->get();
        return view('bisnis.bisnis')->with('restaurants',$restaurants);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        return view('bisnis.bisnis')->with('restaurants',$restaurants);
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
