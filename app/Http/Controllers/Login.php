<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller
{
    // Load Login page
    public function index()
    {
        return view('login');
    }

    // Request Register
    public function register(Request $data)
    {
        $newuser = new User();
        $newuser->name = $data->input('name');
        $newuser->email = $data->input('email');
        $newuser->password = $data->input('password');
        $newuser->phone = $data->input('phone');
        if($newuser->save()){
            return redirect('login')->with('success','Congratulations! your have registered successfully.')
        }
        return view('register');
    }

    // Request for login
    public function login(Request $data)
    {
        $newuser = new User();
        $newuser->name = $data->input('name');
        $newuser->email = $data->input('email');
        $newuser->password = $data->input('password');
        $newuser->phone = $data->input('phone');
        if($newuser->save()){
            return redirect('login')->with('success','Congratulations! your have registered successfully.')
        }
        return view('register');
    }
}
