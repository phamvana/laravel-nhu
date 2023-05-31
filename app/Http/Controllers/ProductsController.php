<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //index function
    public function index()
    {
        return view( "admin.products.list",[
            'title' => 'Thêm sản phẩm'
        ]);
    }
    
}
