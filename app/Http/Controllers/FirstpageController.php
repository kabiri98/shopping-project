<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class FirstpageController extends Controller
{
    public function index()
    {
         $products = Product::orderBy('id', 'desc')->get();
         return view('layouts.index', compact('products'));
        //return view('layouts.index');
    }
}
