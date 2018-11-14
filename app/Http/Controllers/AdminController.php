<?php

namespace shoes\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use shoes\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getlogin()
    {
        return view('membership.login');
    }

    public function postlogin(Request $request)
    {
        $this->validate($request,[
           'email'=>'required',
            'password'=>'required|min:3|max:32'
        ],[
            'email.required'=>"Bạn chưa nhập email",
            'password.required'=>'Bạn chưa nhập password',
            'password.min'=>'password không được nhỏ hơn 3 ký tự',
            'password.max'=>'password không được lớn hơn 32 kỳ tự'

        ]);
        $credentials = [
            'email' => $request['email'],
            'password' => $request['password'],
        ];
        if(Auth::attempt($credentials)){
            return redirect('/shoes/admin/home/index');
        }
        return redirect()->back()->withInput(Input::all())->with('thongbao','Đăng nhập không thành công');
    }
    public function logoutAdmin(){
        Auth::logout();
        return redirect('login/admin');
    }
    function timkiem()
    {

    }
}
