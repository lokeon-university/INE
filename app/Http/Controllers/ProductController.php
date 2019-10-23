<?php

namespace App\Http\Controllers;


use App\Product;


class ProductController extends Controller
{
    function welcome()
    {
        $aProduct_offering = Product::Offerings();
        $aProduct_new = Product::NewProducts();

        return view('welcome', ['aProduct_offering' => $aProduct_offering, 'aProduct_new' => $aProduct_new]);
    } 
}
