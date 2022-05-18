<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class HomeController extends Controller
{
    public function index()
    {
        return view('home.home-page');
    }

    public function store()
    {
        $products = Product::with('category')->paginate(12);
        return view('home.store-page', compact('products'));
    }
}
