<?php

namespace App\Http\Controllers;

class CategoryController extends Controller
{
    public function detail($slug)
    {

        return view('category');
    }
}
