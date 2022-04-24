<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class UsersController extends Controller
{
    //
    function register(Request $req)
    {
        $user = new User;

        $user->name=$req->name;
        $user->email=$req->email;

        $password = request('password');
        $hashed = Hash::make($password);
        $user->password =$hashed;

         $result = $user->save();

            return redirect('login');
    }
}
