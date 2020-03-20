<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class ProfileController extends Controller
{
    public function index()
    {
        // dd(auth()->user()->name);

        $products = Product::orderBy('id', 'desc')->get();
        // dd("1");
        return view('profile.pro', compact('products'));

    }
    public function favorites()
    {
        // dd("1");
        return view('profile.favorites');

    }
    public function bought()
    {
        // dd("1");
        return view('profile.bought');

    }
    public function factors()
    {
        // dd("1");
        return view('profile.factors');

    }
}
