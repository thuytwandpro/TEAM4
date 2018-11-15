<?php

namespace shoes\Http\Controllers;

use Illuminate\Http\Request;
use shoes\Http\Requests\SaleRequest;
use shoes\Sale;
use Validator;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perPage = 5;
        $sales = Sale::orderBy('created_at', 'DESC')->paginate($perPage);
        return view('admin.sales.list_sale')->with('sales', $sales);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sales.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaleRequest $request)
    {
        $sale = new Sale();
        $sale->percent= $request->sales;
        $sale->start_date = $request->start_date;
        $sale->end_date = $request->end_date;
        $sale->save();
          return redirect()->route('getsale') 
          ->with(['flash_level'=>'result_msg','flash_massage'=>' Đã thêm thành công !']);
    }

    public function edit($id)
    {
        $sale = Sale::find($id);
        return view('admin.sales.edit', compact('sale'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SaleRequest $request, $id)
    {
        $sale = new Sale();
        $sale = Sale::find($id);
        $sale->percent= $request->sales;
        $sale->start_date = $request->start_date;
        $sale->end_date = $request->end_date;
        $sale->save();
          return redirect()->route('getsale');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sale = Sale::find($id);
        $sale->delete();
        return redirect()->route('getsale');
            
    }

    public function getSearch(Request $request)
    {
        $sales = Sale::where('id', 'like', '%'.$request->key.'%')->orwhere('percent', 'like', '%'.$request->key.'%')
                    ->orwhere('end_date', 'like', '%'.$request->key.'%')->orwhere('start_date', 'like', '%'.$request->key.'%')->paginate(5);
        return view('admin.sales.search', compact('sales'));
    }
}
