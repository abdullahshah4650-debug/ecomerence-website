<?php

namespace App\Http\Controllers;

class ProductdetailController extends Controller
{
    public function detail($slug)
    {
        return view('productdetail');
    }
    }
