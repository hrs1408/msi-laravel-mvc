<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartDetail;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $cart = $user->cart;
        $cartDetails = $cart->cartDetail;
        return view('home.cart-page', compact('cart', 'cartDetails'));
    }

    public function checkout()
    {
        //
    }


    public function insert(Request $request)
    {
        $user = auth()->user();
        if (!$user) {
            return redirect()->route('login');
        }
        if ($user->cart) {
            $cart = $user->cart;
            $cartDetail = $cart->cartDetail();
            if ($cartDetail->where('product_id', $request->product_id)->first()) {
                $cartDetailCurrent = $cartDetail->where('product_id', $request->product_id)->first();
                $cartDetailCurrent->quantity += 1;
                $cartDetailCurrent->into_money += $cartDetailCurrent->product->price;
                $cart->total_money += $cartDetailCurrent->product->price;
                $cart->save();
                $cartDetailCurrent->save();
            } else {
                $cartDetail = new CartDetail();
                $cartDetail->cart_id = $cart->id;
                $cartDetail->product_id = $request->product_id;
                $cartDetail->quantity = 1;
                $cartDetail->into_money = $cartDetail->quantity * Product::find($request->product_id)->price;
                $cart->total_money +=  $cartDetail->into_money;
                $cart->quantity += 1;
                $cart->save();
                $cartDetail->save();
            }
        } else {
            $cart = new Cart();
            $cart->user_id = $user->id;
            $cart->total_money = 0;
            $cart->save();
            $cartDetail = new CartDetail();
            $cartDetail->cart_id = $cart->id;
            $cartDetail->product_id = $request->product_id;
            $cartDetail->quantity = 1;
            $cartDetail->into_money = $cartDetail->quantity * Product::find($request->product_id)->price;
            $cart->total_money += $cartDetail->quantity * Product::find($request->product_id)->price;
            $cart->quantity += 1;
            $cart->save();
            $cartDetail->save();
        }
        return redirect()->route('cart.index');
    }

    public function update(Request $request)
    {

        return redirect()->route('cart.index');
    }

    public function remove(Request $request)
    {
        $cartDetail = CartDetail::find($request->id);
        $cart = $cartDetail->cart;
        $cart->total_money -= $cartDetail->into_money;
        $cart->quantity -= 1;
        $cart->save();
        $cartDetail->delete();
        return redirect()->route('cart.index');
    }

    public function destroy(Request $request)
    {
        return redirect()->route('cart.index');
    }
}
