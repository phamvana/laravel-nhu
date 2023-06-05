<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryCreateFormRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // 
    public function index()
    {
        return view("admin.menus.add", [
            'title' => ' Quản lý thêm danh mục'
        ]);
    }
    public function store(CategoryCreateFormRequest $request)
    {
        dd($request->input());
    }

    public function list()
    {
        return view("admin.menus.list", [
            'title' => 'Quản lý danh mục'
        ]);
    }
}
