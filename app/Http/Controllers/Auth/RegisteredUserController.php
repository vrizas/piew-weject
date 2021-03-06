<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Restaurant;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }
    public function createBisnis()
    {
        return view('auth.registerBisnis');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => ['required', 'confirmed', Rules\Password::min(8)],
            'role' => 'required',
            
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            
        ]);

        if ($request->role == 'bisnis') {
            $restaurants = Restaurant::create([
                'id' => $user->id,
                'nama' => $request->name,
                'rating'=> '0.0',
                'alamat'=> '',
                'id_location'=>'0',
                'image'=>'noimage.png',
                'kategori'=>'',
                'deskripsi' => '',
                'jamBuka' => '00:00',
                'jamTutup' => '00:00',
            ]);
        }


        event(new Registered($user));

        // Auth::login($user);

        return redirect(RouteServiceProvider::LOGIN);
    }
}
