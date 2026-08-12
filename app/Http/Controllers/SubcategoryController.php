<?php

namespace App\Http\Controllers;

class SubcategoryController extends Controller
{
    public function detail($slug)
    {
        return view('subcategory');
    }
}
