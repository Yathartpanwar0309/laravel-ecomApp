<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Product;
use Illuminate\Http\Request;

class Home extends Controller
{
    // Load home page
    public function index()
    {
        $allProducts = Product::all();
        return view('index',compact('allProducts'));
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
        $allProducts = Product::all();
        return view('shop',compact('allProducts'));
    }

    // Load single product detail page
    public function singleProduct()
    {
        return view('singleProduct');
    }
}
