<?php

namespace shoes\Http\Controllers;

use Illuminate\Http\Request;
use shoes\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function index()
//    {
//        $category = Category::all();
//         return view('admin.categories.list_category',['category'=>$category]);
//    }
    public function getDanhSach()
    {
        $category = Category::orderBy('created_at', 'DESC')->paginate(5);
        return view('admin.categories.list_category', compact('category'));
    }
    public  function  getThem()
    {
        return view('admin.categories.add_category');
    }

    public  function  postThem(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:categories,name',
        ], [
            'name.required' => 'Bạn buộc phải nhập tên danh mục',
            'name.unique' => 'Tên danh mục đã tồn tại',
        ]);
        $category = new Category();
        $category->name = $request->name;
        $category->slug = str_slug($request->name);
        $category->save();
        return redirect('shoes/admin/categories/danhsach')->with('thongbao', 'Bạn thêm danh mục sản phẩm thành công');
    }

    public function getSua($id)
    {
        $category = Category::find($id);
        return view('admin.categories.edit_category', compact('category'));
    }
    public function postSua(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
        ], [
            'name.required' => 'Bạn buộc phải nhập tên danh mục',
        ]);
        $category = Category::find($id);
        $category->name = $request->name;
        $category->slug = str_slug($request->name);
        $category->save();
        return redirect('shoes/admin/categories/danhsach')->with('thongbao', 'Bạn sửa danh mục sản phẩm thành công');
    }

    public function getXoa($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('shoes/admin/categories/danhsach')->with('thongbao', 'Bạn đã xóa thành công');
    }

    public function getSearch(Request $request)
    {
        $category = Category::where('name', 'like', '%' . $request->key . '%')->paginate();
        return view('admin.categories.search_category', compact('category'));
    }
}
