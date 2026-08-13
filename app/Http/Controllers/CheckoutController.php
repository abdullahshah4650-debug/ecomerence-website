<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Builder\Function_;

class CheckoutController extends Controller
{
public function checkout($slug){
    return view ('check-out');
}
}
