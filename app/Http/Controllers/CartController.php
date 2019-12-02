<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }
    
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

    public function operation(String $sOperation, Product $product, Request $request)
    {
        if (array_key_exists($product->id, $request->session()->get('cart', null)->aItem)) {
            switch ($sOperation) {
                case 'add':
                    $request->session()->get('cart', null)->add($product);
                    break;

                case 'remove':
                    $request->session()->get('cart', null)->remove($product);
                    break;

                case 'removeAll':
                    $request->session()->get('cart', null)->removeAll($product);
                    break;
            }
        }
        return view('cart.detail');
    }

    public function purchasing()
    {
        $cart = session()->get('cart', null);

        return view('cart.purchasing');
    }
}
