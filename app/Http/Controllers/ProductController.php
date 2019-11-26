<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Symfony\Component\HttpFoundation\Request;

class ProductController extends Controller
{
    function welcome()
    {
        $aProduct_offering = Product::Offerings();
        $aProduct_new = Product::NewProducts();

        return view('welcome', compact('aProduct_offering', 'aProduct_new'));
    }

    function detail(Product $product)
    {
        return view('product.detail', compact('product'));
    }

    function addToCart(Product $product, Request $request)
    {
        $cart = new Cart($request->session()->get('cart', null));
        $cart->add($product);
        $request->session()->put('cart', $cart);

        return redirect()->route('product', ['product' => $product->id])->with('success', 'El producto ha sido añadido al carro.');
    }
}
