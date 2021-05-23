<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Restaurant;
use App\Models\Location;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        $request->session()->put('login','true');

        $role = Auth::user()->role;
        
        $id = Auth::user()->id;
        $restaurants = Restaurant::all();
        $restaurants = Restaurant::Where('id', $id)->get();
        $locations = Location::all();

        if($role == 'reviewer') {
            return redirect()->intended(RouteServiceProvider::HOME);
        }else if($role == 'bisnis'){
            foreach($restaurants as $restaurant) {
                if($restaurant->id_location === 0){
                    return redirect('/business/'.$id.'/create');
                }else{
                    return redirect('/business/'.$id);
                }
            }
    
        }
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
