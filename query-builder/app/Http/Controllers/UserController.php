<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // public function login()
    // {

    //     return view('auth.login');
    // }
    public function register()
    {

        return view('auth.register');
    }
    public function store(Request $request)
    {
        // dd($request->phone);
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'password' => 'required',
        ]);
        // dd($request);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => $request->password,

        ]);
        return redirect()->route('login'); //بعمل ريدايركت على اسم الراوت اللي بعطيه اياه


    }
}
