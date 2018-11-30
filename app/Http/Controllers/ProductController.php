<?php

namespace shoes\Http\Controllers;

use Illuminate\Http\Request;
use shoes\Product;
use shoes\Category;
use shoes\Sale;
use Validator;
use Auth;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function __construct()
//    {
//        $this->middleware('admin')->only('destroy');
//    }
//    public function index()
//    {
//        return view('admin.products.list_product');
//    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getDanhSach()
    {
        $products = Product::orderBy('created_at', 'DESC')->paginate(5);
        return view('admin.products.list_product', compact('products'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getThem ()
    {
        $sale = Sale::all();
        $category = Category::all();
        return view('admin.products.add_product',compact('category','sale'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function postThem(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3',

        ], [
            'name.required' => 'Bạn chưa nhập tên sản phẩm',
            'name.min' => 'Tên sản phẩm phải có ít nhất 3 ký tự',
        ]);
        $pro = new Product();
        $pro->name = $request->name;
        $pro->id_category = $request->id_category;
        $pro->id_sale = $request->id_sale;
        $pro->quantity = $request->quantity;
        $pro->price = $request->price;
        $pro->content = $request->contents;
        $pro->origin = $request->size;
        $pro->size = $request->address;
        $pro->gender = $request->gender;
        $pro->slug = str_slug($request->name);

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $name = $file->getClientOriginalName();
            $img = str_random(4) . "_" . $name;
            while (file_exists("pages/image" . $img)) {
                $img = str_random(4) . "_" . $name;
            }
            $file->move("pages/image" , $img);
            $pro->img = $img;
        } else {
            $pro->img = "";
        }
        $pro->save();
        return redirect('shoes/admin/products/danhsach')->with('thongbao', 'Bạn thêm thành công');
    }

}
