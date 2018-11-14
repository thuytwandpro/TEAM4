<?php

namespace shoes\Http\Controllers;

use Illuminate\Http\Request;
use shoes\Customer;
use Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.index');
    }
    function getRegister()
    {
        return view('.membership.register');
    }
    function postRegister(Request $request)
    {

        $this->validate($request,[
            'name'=>'required|min:3',
            'username'=>'required|min:3|unique:users,username',
            'email'=>'required',
            'password'=>'required|min:3|max:32',
            'passwordAgain'=>'required|same:password',
//            'phone'=>'numeric',
        ],[
            'name.required'=>'Bạn chưa nhập tên người dùng',
            'username.required'=>'Bạn chưa nhập tên đăng nhập',
            'name.min'=>'Tên người dùng phải có ít nhất 3 ký tự',
            'username.min'=>'Tên đăng nhập phải có ít nhất 3 ký tự',
            'username.unique'=>'Username đã tồn tại',
            'email.required'=>'Bạn chưa nhập email',

            'password.required'=>'Bạn chưa nhập mật khẩu',
            'password.min'=>'Mật khẩu phải có ít nhất 3 ký tự',
            'password.max'=>'Mật khẩu chỉ được tối đa 32 ký tự',
            'passwordAgain.required'=>'Bạn chưa nhập lại mật khẩu',
            'passwordAgain.same'=>'Mật khẩu nhập lại chưa khớp',
//            'phone.numeric' => 'Số điện thoại phải là số',
//            'phone.max'=>'Phone tối đa là 11 số',
//            'phone.required'=>'Bạn chưa nhập địa chỉ',

        ]);
        $user = new Customer();
        $user->name = $request->name;
        $user->username = $request->username;
        $user->password = bcrypt($request->password);
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->save();
        return redirect('/')->with('thongbao','Bạn đã đăng ký thành công');

    }


    //login khách hàng
    public function getlogin()
    {
        return view('membership.login_customer');
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
            'password.max'=>'password không được lớn hơn 32 kỳ tự',

        ]);
        $credentials = [
            'email' => $request['email'],
            'password' => $request['password'],
        ];
        $email = $request->input('email');
        $password = $request->input('password');
        if( Auth::attempt(['email' => $email, 'password' =>$password])){
            return redirect('/');
        }
        return redirect()->back()->withInput(Input::all())->with('thongbao','Đăng nhập không thành công');
    }
    public function checkout(){
        Auth::logout();
        return redirect('/');
    }
}
