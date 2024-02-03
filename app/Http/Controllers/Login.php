<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Login extends Controller
{
    // Load Login page
    public function index()
    {
        return view('login');
    }

    // Request for login
    public function authLogin(Request $data)
    {
        $user = User::where('email',$data->input('email'))->first();
        if($user){
            $matchPassword = Hash::check($data->input('password'),$user->password);
            if($matchPassword){
                session()->put(['id' => $user->id, 'role' => $user->role]);
                if($user->role == 0){
                    return redirect('/');
                }
            }else{
                return redirect('login')->with('error','Incorrect password.');
            }
        }else{
            return redirect('login')->with('error','Email does not exist.');
        }
        return view('login');
    }

    // Logout User
    public function logout()
    {
        session()->forget('id');
        session()->forget('role');
        return redirect('/login');
    }

    // Load Register page
    public function register()
    {
        return view('register');
    }

    // Request Register
    public function authRegister(Request $data)
    {
        $newuser = new User();
        $newuser->name = $data->input('name');
        $newuser->email = $data->input('email');
        $newuser->password = $data->input('password');
        $newuser->phone = $data->input('phone');
        if($newuser->save()){
            return redirect('login')->with('success','Congratulations! your have registered successfully.');
        }
        return view('register');
    }
}
