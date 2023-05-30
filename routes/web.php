<?php

use App\User;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\CategoryController;
//Trang chủ
Route::get('/', [
    PagesController::class,
    'index'
]);
//Thông tin
Route::get('/about', [
    PagesController::class,
    'about'
]);


//Sản phẩm
Route::get('/products', [
    ProductsController::class, 'index'
]);

//Danh mục sản phẩm
Route::get('/category-add', [
    CategoryController::class, 'index'
]);

Route::get('/category-list', [
    CategoryController::class, 'list'
]);


//dịch vụ
Route::get('service', [
    ServiceController::class,
    'index'
]);

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*
Route::get('/', function () {
    return view('welcome');
    //return env('MY_NAME');
});

*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/home/menus/add', [HomeController::class,'index']);
