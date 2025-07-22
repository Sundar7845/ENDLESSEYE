<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
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

    function product()
    {
        return view('shop.product');
    }

    function shop()
    {
        return view('shop.shop');
    }

    function categories()
    {
        return view('shop.categories');
    }
}
