<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class CartController extends Controller
{
    public function show(Request $request)
    {
        $cart = $request->session()->get('cart', null);
        return view('cart.detail');
    }

    public function add(Product $product)
    {
        session()->get('cart', null)->add($product);

        return view('cart.detail');
    }

    public function remove(Product $product) 
    {
        session()->get('cart', null)->remove($product);

        return view('cart.detail');
    }

    public function removeAll(Product $product)
    {
        session()->get('cart', null)->removeAll($product);
        
        return view('cart.detail');
    }
}
