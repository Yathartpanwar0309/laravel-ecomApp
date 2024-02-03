<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    // Load home page
    public function index()
    {
        return view('index');
    }

    // Load cart page
    public function cart()
    {
        return view('cart');
    }

    // Load checkout page
    public function checkout()
    {
        return view('checkout');
    }

    // Load shop page
    public function shop()
    {
        return view('shop');
    }

    // Load single product detail page
    public function singleProduct()
    {
        return view('singleProduct');
    }
}
