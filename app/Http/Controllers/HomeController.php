<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
        $categories = Category::all();
        $products = Product::with('category')->paginate(12);
        return view('home.store-page', compact('products', 'categories'));

    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->first();
        return view('home.product-details', compact('product'));
    }

    public function checkout()
    {
        $user = auth()->user();
        $cart = $user->cart;
        $cartDetails = $cart->cartDetail;
        return view('home.checkout-page', compact('cart', 'cartDetails', 'user'));
    }

    public function profile()
    {
        $user = auth()->user();
        return view('home.profile', compact('user'));
    }
}
