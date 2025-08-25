<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    function haram()
    {
        return view('shop.haram');
    }

    function necklace()
    {
        return view('shop.necklace');
    }

    function product($id)
    {
        $product = Product::where('id', $id)->first();
        return view('shop.product', compact('product'));
    }

    function shop()
    {
        $product = Product::get();
        return view('shop.shop', compact('product'));
    }

    function categories()
    {
        return view('shop.categories');
    }
}
