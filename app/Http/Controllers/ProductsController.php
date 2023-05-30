<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //index function
    public function index()
    {

        $title = 'Learn Laravel by Pham Van A';
        return view('products.index', compact('title'));
    }
}
