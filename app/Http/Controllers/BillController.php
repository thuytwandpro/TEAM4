<?php

namespace shoes\Http\Controllers;

use Illuminate\Http\Request;
use shoes\Bill;
use shoes\DetailBill;
use DB;
use Validator;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getList()
    {
        $data = Bill::paginate(5);
        return view('admin.bills.list_bill', ['data'=>$data]);
    }
    public function getDetail(Request $request, $id) {
        $bill = Bill::where('id',$id)->first();
        $data = DB::table('detailbills')
                    ->join('products', 'products.id', '=', 'detailbills.id_product')
                    ->join('bills', 'bills.id', '=', 'detailbills.id_bill')
                    ->where('id_bill',$id)
                    ->get();
        if($request->hasFile('img'))
            {
                $file = $request->file('img');

                $name = $file->getClientOriginalName();
                $img = str_random(4)."_".$name;
                while(file_exists("upload".$img))
                {
                    $img = str_random(4)."_".$name;
                }
                $file->move("image",$img);
                $data->image=$img;
            }
            else{
                $data->image="";
            }
         return view('admin.bills.chitietbill', ['data'=>$data,'bill'=>$bill]);
    }

    public function postDetail($id)
    {
        $bill = Bill::find($id);
        $bill->status = 1;
        $bill->save();
        return redirect('/shoes/admin/bills')
        ->with(['flash_level'=>'result_msg','flash_massage'=>' Đã xác nhận đơn hàng thành công !']);        

    }

    public function getDel($id)
    {       
        $bill = Bill::where('id',$id)->first();

        if ($bill->status ==1) {
            return redirect()->back()
            ->with(['flash_level'=>'result_msg','flash_massage'=>'Không thể hủy đơn hàng số: '.$id.' vì đã được xác nhận!']);
        } else {
            $bill = Bill::find($id);
            $billdetail = DetailBill::where('id_bill',$id);
            $billdetail->delete();
            $bill->delete();
            return redirect('/shoes/admin/bills')
            ->with(['flash_level'=>'result_msg','flash_massage'=>'Đã hủy bỏ đơn hàng số:  '.$id.' !']);
        }
    }

    public function getDetailBill($id)
    {
        $detailbill = DetailBill::where('id',$id)->first();

        if ($detailbill->status ==1) {
            return redirect()->back()
            ->with(['flash_level'=>'result_msg','flash_massage'=>'Không thể hủy đơn hàng số: '.$id.' vì đã được xác nhận!']);
        } else {
            $detailbill = DetailBill::find($id);
            $detailbill->delete();
            return redirect()->route('getdetail')
            ->with(['flash_level'=>'result_msg','flash_massage'=>'Đã hủy bỏ đơn hàng số:  '.$id.' !']);
        }
    }

    public function getSearch(Request $request)
    {
        $bill = Bill::where('id', 'like', '%'.$request->key.'%')->orwhere('customer_name', 'like', '%'.$request->key.'%')
                    ->orwhere('address', 'like', '%'.$request->key.'%')->orwhere('email', 'like', '%'.$request->key.'%')->paginate(5);
        return view('admin.bills.search', compact('bill'));
    }
}

 

