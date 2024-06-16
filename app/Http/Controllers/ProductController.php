<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function product($product)
    {
        return view('home', ['product'=> $product]);
    }
}
