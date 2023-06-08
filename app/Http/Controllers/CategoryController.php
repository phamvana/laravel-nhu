<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryCreateFormRequest;
use App\Models\Menu;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Services\Menu\MenuService;

class CategoryController extends Controller
{
    protected $menuService;

    public function __construct(MenuService $menuService)
    {
        $this->menuService = $menuService;
    }

    // 
    public function index()
    {
        return view("admin.menus.add", [
            'title' => ' Quản lý thêm danh mục'
        ]);
    }
    public function store(CategoryCreateFormRequest $request)
    {
        // dd($request->input());
        $this->menuService->create($request);

        return redirect()->back();


    }

    public function list()
    {
        return view("admin.menus.list", [
            'title' => 'Quản lý danh mục',
            'menus' => $this->menuService->getAll()
        ]);
    }

    public function destroy(Request $request): JsonResponse
    {
        $result = $this->menuService->destroy($request);
        if ($result) {
            return response()->json([
                'error' => false,
                'message' => 'Xóa thành công danh mục'
            ]);
        }

        return response()->json([
            'error' => true
        ]);
    }

    public function show(Menu $menu)
    {
        return view('admin.menus.edit', [
            'title' => 'Chỉnh Sửa Danh Mục: ' . $menu->name,
            'menu' => $menu,
            'menus' => $this->menuService->getParent()
        ]);
    }

    public function update(Menu $menu, CategoryCreateFormRequest $request)
    {
        $this->menuService->update($request, $menu);

        return redirect('category-list');
    }
}
