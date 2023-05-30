<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // 
    public function index()
    {
        return view("admin.menus.add", [
            'title' => 'Thêm danh mục'
        ]);
    }
    public function list()
    {
        return view("admin.menus.list", [
            'title' => 'Thêm danh mục'
        ]);
    }
}
