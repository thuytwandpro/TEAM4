<?php

namespace shoes\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use shoes\User;
use Validator;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $users = User::select('id','name','username', 'email', 'phone','address', 'created_at', 'updated_at')->orderBy('id', 'DESC')->get()->toArray();
        $users = User::orderBy('created_at', 'DESC')->paginate();
        return view('admin.users.list_user', compact('users'));
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
//    public function getDangnhapAdmin(){
//        return view('admin.login');
//    }
//    public function postDangnhapAdmin(Request $request){
//        $this->validate($request, [
//            'email'=>'required',
//            'password'=>'required|min:3|max:255'
//        ],[
//            'email.required'=>'bạn chưa nhập email',
//            'password.required'=>'Bạn chưa nhập password',
//            'password.min'=>'password không được nhỏ hơn 3 ký tự',
//            'password.max'=>'password không được lớn hơn 255 ký tự',
//        ]);
//        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
//        {
//            return redirect(('admin/theloai/danhsach'));
//        }
//    }
}
