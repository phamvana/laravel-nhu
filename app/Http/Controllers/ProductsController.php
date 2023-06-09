<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\Product\ProductRequest;
use App\Http\Services\Product\ProductAdminService;


use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //index function

    protected $productService;

    public function __construct(ProductAdminService $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
        return view( "products.index",[
            'title' => 'Quản lý danh sách sản phẩm'
        ]);
    }
    public function list()
    {
        return view( "admin.product.list",[
            'title' => 'Quản lý danh sách sản phẩm'
        ]);
    }
    public function add()
    {
        return view( "admin.product.add",[
            'title' => 'Quản lý thêm sản phẩm',
            'menus' => $this->productService->getMenu()
        ]);
    }
    public function store(ProductRequest $request)
    {
        $this->productService->insert($request);

        return redirect()->back();
    }

    public function show(Product $product)
    {
        return view('admin.product.edit', [
            'title' => 'Chỉnh Sửa Sản Phẩm',
            'product' => $product,
            'menus' => $this->productService->getMenu()
        ]);
    }


    public function update(Request $request, Product $product)
    {
        $result = $this->productService->update($request, $product);
        if ($result) {
            return redirect('/admin/products/list');
        }

        return redirect()->back();
    }


    public function destroy(Request $request)
    {
        $result = $this->productService->delete($request);
        if ($result) {
            return response()->json([
                'error' => false,
                'message' => 'Xóa thành công sản phẩm'
            ]);
        }

        return response()->json([ 'error' => true ]);
    }
}
