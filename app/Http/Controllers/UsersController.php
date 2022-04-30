<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class UsersController extends Controller
{
    //
    function register(Request $req)
    {
        $user = new User;

        $user->name=$req->name;
        $user->email=$req->email;
        $user->role=$req->role;

        $password = request('password');
        $hashed = Hash::make($password);
        $user->password =$hashed;

         $result = $user->save();

            return view('register');
    }

    function login(Request $req)
    {
        $credentials =  $req->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        // checking match of the filled data with the database
        if (Auth::attempt($credentials))
        {
            $req->session()->regenerate();

            // i passed the route of a controller to view confessions to a view
            return redirect()->intended('dashboard'); 
        }

        return back()->withErrors([
            'email'=>'The provided credentials do not match our records.'
        ])->onlyInput('email');
    }

    function logout(Request $req)
    {
        Auth::logout();

        $req->session()->invalidate();

        $req->session()->regenerateToken();

        return redirect('/login');
    }

    /* 
    this passes a dashboard verification check
    desides on which dashboard the user belongs
    */
    function dashboard()
    {
        $user = auth()->user();

        $role = ($user->role);
        if($role==1)
        {
            return view('admindash');
        }else {
            return view('dashboard');
        }    
    }



}
