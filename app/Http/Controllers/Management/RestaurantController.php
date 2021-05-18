<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Restaurant;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurants = Restaurant::all('nama','image','rating','id_restaurant');
        return view('home')->with('restaurants',$restaurants);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:restaurants|max:255',
            'alamat' => 'required|min:2|max:255',
            'kota' => 'required',
            //'menu' => 'required',
            'provinsi' => 'required',
            'description' => 'required',
            'category_id' => 'required|numeric',
            
        ]);
       
        $restaurants = Restaurant::find($id_restaurant);
        // if($request->image){
        //     $request->validate([
        //         'image' => 'nullable|file|image|mimes:jpeg,png,jpg|max:5000'
        //     ]);
        //     if($business->image != "noimage.png"){
        //         $imageName = $business->image;
        //         unlink(public_path('bisnis_image').'/'.$imageName);
        //     }
        //     $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
        //     $request->image->move(public_path('bisnis_images'),$imageName);
        // }else{
        //     $imageName = $business->image;
        // }
        $restaurants->nama =$request->nama;
        //$restaurant->image=$imageName;
        $restaurants->alamat=$request->alamat;
        $restaurants->kota=$request->kota;
        //$restaurant->menu=$request->menu;
        $restaurants->provinsi=$request->provinsi;
        $restaurants->description =$request->description;
        $restaurants->category_id =$request->category_id;
        $restaurants->save();

        $id = Auth::user()->id;
        $restaurants = Restaurant::all('nama')->where($id==='id_restaurant');

        $request->validate([
            'name' => 'required|unique:restaurants|min:3|max:255',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_restaurant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_restaurant)
    {
        //$restaurants = Restaurant::find($id_restaurant);
        // $categories = Category::all();
        $id = Auth::user()->id;
        $restaurants = Restaurant::find($id_restaurant)->where($id==='id_restaurant');
        return view ('bisnis.update-business')->with('restaurant',$restaurants);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_restaurant)
    {
        $request->validate([
            'name' => 'required|unique:restaurants|max:255',
            'alamat' => 'required|min:2|max:255',
            'kota' => 'required',
            //'menu' => 'required',
            'provinsi' => 'required',
            'description' => 'required',
            'category_id' => 'required|numeric',
            
        ]);
       
        $restaurants = Restaurant::find($id_restaurant);
        // if($request->image){
        //     $request->validate([
        //         'image' => 'nullable|file|image|mimes:jpeg,png,jpg|max:5000'
        //     ]);
        //     if($business->image != "noimage.png"){
        //         $imageName = $business->image;
        //         unlink(public_path('bisnis_image').'/'.$imageName);
        //     }
        //     $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
        //     $request->image->move(public_path('bisnis_images'),$imageName);
        // }else{
        //     $imageName = $business->image;
        // }
        $restaurants->nama =$request->nama;
        //$restaurant->image=$imageName;
        $restaurants->alamat=$request->alamat;
        $restaurants->kota=$request->kota;
        //$restaurant->menu=$request->menu;
        $restaurants->provinsi=$request->provinsi;
        $restaurants->description =$request->description;
        $restaurants->category_id =$request->category_id;
        $restaurants->save();

        $id = Auth::user()->id;
        $restaurants = Restaurant::all('nama')->where($id==='id_restaurant');
        

        return(redirect('/business')->with('restaurants',$restaurants));
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
