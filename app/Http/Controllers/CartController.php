<?php

namespace App\Http\Controllers;

class CartController extends Controller
{
    public function list ($slug){
        return view('cart-list');
    }
}
