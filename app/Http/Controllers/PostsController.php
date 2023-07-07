<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PostsController extends Controller
{
    //
    public function index(){
        // return view('posts.index');
        // $posts = DB::select("SELECT * FROM posts WHERE id=:id",
        // [
        //     'id' => 3]);
        // dd($posts);

        $posts=DB::table("posts")->where('id',1)
        ->select('title')
        ->get();
        dd($posts);
    }
}
