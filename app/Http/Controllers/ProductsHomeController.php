<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\Product\ProductService;
use App\Http\Controllers\Controller;
use App\Http\Requests\Product\ProductRequest;
use App\Http\Services\Product\ProductAdminService;

use App\Models\Product;


class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    // public function index($id)
    // {
    //     $product = $this->productService->show($id);
    //     $productsMore = $this->productService->more($id);

    //     return view('products.index', [
    //         'title' => $product->name,
    //         'product' => $product,
    //         'products' => $productsMore
    //     ]);
    // }
    public function index(){
        
         return view( "products.index",[
            'title' => 'Quản lý danh sách sản phẩm'
        ]);
    }
}