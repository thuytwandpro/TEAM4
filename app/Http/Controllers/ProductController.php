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
            'name' => 'required|min:3|unique:products,name',
            'quantity' => 'required|max:10',
            'size' => 'required|max:2',
        ], [
            'name.required' => 'Bạn chưa nhập tên sản phẩm',
            'name.unique' => 'Tên sản phẩm không được trùng',
            'name.min' => 'Tên sản phẩm phải có ít nhất 3 ký tự',
            'quantity.required' => "Bạn phải nhập số lượng",
            'quantity.max' => "Số lượng không quá 10 con số",
            'size.required' => "Bạn chưa nhập size sản phẩm",
            'size.max' => "Size không được lớn hơn 100",
        ]);
        $pro = new Product();
        $pro->name = $request->name;
        $pro->id_category = $request->id_category;
        $pro->id_sale = $request->id_sale;
        $pro->quantity = $request->quantity;
        $pro->price = $request->price;
        $pro->content = $request->contents;
        $pro->origin = $request->origin;
        $pro->size = $request->size;
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
        return redirect('products/danhsach')->with('thongbao', 'Bạn thêm thành công');
    }
    public function getSua($id)
    {
        $category = Category::all();
        $sale = Sale::all();
        $pro = Product::find($id);
        return view('admin.products.edit_products', compact('pro', 'category', 'sale'));
    }

    public function postSua(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'quantity' => 'required|max:10',
            'size' => 'required|max:2',
        ], [
            'name.required' => 'Bạn chưa nhập tên sản phẩm',
            'name.min' => 'Tên sản phẩm phải có ít nhất 3 ký tự',
            'quantity.required' => "Bạn phải nhập số lượng",
            'quantity.max' => "Số lượng không quá 10 con số",
            'size.required' => "Bạn chưa nhập size sản phẩm",
            'size.max' => "Size không được lớn hơn 100",
        ]);
        $pro = Product::find($id);
        $pro->name = $request->name;
        $pro->id_category = $request->id_category;
        $pro->id_sale = $request->id_sale;
        $pro->quantity = $request->quantity;
        $pro->price = $request->price;
        $pro->content = $request->contents;
        $pro->origin = $request->origin;
        $pro->size = $request->size;
        $pro->gender = $request->gender;
        $pro->slug = str_slug($request->name);

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $name = $file->getClientOriginalName();
            $img = str_random(4) . "_" . $name;
            while (file_exists("pages/image" . $img)) {
                $img = str_random(4) . "_" . $name;
            }
            $file->move("pages/image", $img);
            if(!empty($pro->img) && File::exists("pages/image/".$pro->img)){
                unlink("pages/image".$pro->img);
            }
            $pro->img = $img;
        }
        $pro->save();
        return redirect('products/danhsach')->with('thongbao', 'Bạn đã sửa thông tin sản phẩm thành công thành công');
    }

    public function getXoa($id)
    {
        $pro = Product::find($id);
        $pro->delete();
        return redirect('products/danhsach')->with('thongbao', 'Bạn đã xóa thành công');
    }

    public function getSearch(Request $request)
    {
        $pro = Product::where('name', 'like', '%' . $request->key . '%')
            ->orwhere('id_category', 'like', '%' . $request->key . '%')->orwhere('price', 'like', '%' . $request->key . '%')->orwhere('id_sale', 'like', '%' . $request->key . '%')->orwhere('size', 'like', '%' . $request->key . '%')->orwhere('gender', 'like', '%' . $request->key . '%')->paginate();
        return view('admin.products.search_product', compact('pro'));
    }
}
