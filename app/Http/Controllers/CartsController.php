<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartsController extends Controller
{
    //
    public function index()
    {
        return view("admin.carts.customer", [
            'title' => ' Quản lý giỏ hàng'
        ]);
    }
}
