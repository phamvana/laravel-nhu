<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //index function
    public function index()
    {
        return view( "admin.product.list",[
            'title' => 'Quản lý danh sách sản phẩm'
        ]);
    }
    public function add()
    {
        return view( "admin.product.add",[
            'title' => 'Quản lý thêm sản phẩm'
        ]);
    }
}
