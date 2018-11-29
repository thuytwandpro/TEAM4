<?php

namespace shoes\Http\Controllers;

use Illuminate\Http\Request;
use shoes\Bill;

class StatisticsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.statistics.list_statistics');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function getThongke(Request $request)
    {
        $bill = Bill::where('id', 'like', '%'.$request->key.'%')->orwhere('name', 'like', '%'.$request->key.'%')
            ->orwhere('username', 'like', '%'.$request->key.'%')->orwhere('email', 'like', '%'.$request->key.'%')->orwhere('phone', 'like', '%'.$request->key.'%')->orwhere('address', 'like', '%'.$request->key.'%')->paginate(5);
        return view('admin.statistics.thongke', compact('users'));
    }
}
