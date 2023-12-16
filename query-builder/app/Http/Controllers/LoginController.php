<?php

namespace App\Http\Controllers;
// use App\Models\User;

use Illuminate\Http\Request;
use App\Models\User;


class LoginController extends Controller
{
    public function index()
    {

        return view('auth.login');
    }
    public function read(Request $request)
    {
        $users = User::where([
            'email' , $request->email,
            'password' , $request->password,
     ]);
        // dd($request->email);
        // $user = User::where('email', $request->email)
        // ->where('password', $request->password)
        // ->get();
        // $user = User::where([
        //     ['email', '=', $request->email],
        //     ['password', '=', $request->password],

        // ]);

        dd($users);
    }
}
