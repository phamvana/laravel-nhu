<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       
        return view('admin.home',[
            'title' => 'Trang Quản Trị'
         ]
    );
    }
    public function create()
    {
       
        return "Test";
    //     return view('admin.home',[
    //         'title' => 'Trang Quản Trị'
    //      ]
    // );
    }

}
