<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\

class PagesController extends Controller
{
    //index
    public function index(){
        return view('index',[
            'title' => 'Trang chủ'
        ]);
    }

    //about
    public function about(){
        return view('about', ['title' => 'Về chúng tôi']);
    }
    public function contract(){
        
        return view('contract',[
            'title'=>"Liên hệ"
        ]);
    }

    // public function store(Request $request){
        
    //     $this->validate($request,[

    //     ]);
    //     // dd($request->input());
    //     // return view('admin.users.store',[
    //     //     'title'=>"Đăng nhập vào hệ thống"
    //     // ]);
    // }
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email:filter',
            'password' => 'required'
        ]);

        if (Auth::attempt([
                'email' => $request->input('email'),
                'password' => $request->input('password')
            ], $request->input('remember'))) {

            return redirect()->route('admin');
        }

        Session::flash('error', 'Email hoặc Password không đúng');
        return redirect()->back();
    }

}
