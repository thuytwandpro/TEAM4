<?php

namespace shoes\Http\Controllers;

use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use shoes\Role;
use shoes\User;
use Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function index()
//    {
////        $users = User::select('id','name','username', 'email', 'phone','address', 'created_at', 'updated_at')->orderBy('id', 'DESC')->get()->toArray();
//        $users = User::orderBy('created_at', 'DESC')->paginate();
//        return view('admin.users.list_user', compact('users'));
//    }
    public function getDanhSach()
    {
//        if(Auth::user()->user_roles->id_role == 3){
//            return redirect('/shoes');
//        }
//        elseif (!Auth::check() || !Auth::user()->user_roles->id_role == 1) {
//            return redirect('/shoes/admin/home/index');
//        }
        $users = User::orderBy('created_at', 'DESC')->paginate(5);
        return view('admin.users.list_user', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getThem()
    {
        $roles = Role::all();
        return view('admin.users.add_user')->with('roles', $roles);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function postThem(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'username' => 'required|min:3|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:3|max:32',
            'phone' => 'required|max:11',
        ], [
            'name.required' => 'Bạn chưa nhập tên người dùng',
            'username.required' => 'Bạn chưa nhập tên đăng nhập',
            'name.min' => 'Tên người dùng phải có ít nhất 3 ký tự',
            'username.min' => 'Tên đăng nhập phải có ít nhất 3 ký tự',
            'username.unique' => 'Username đã tồn tại',
            'email.required' => 'Bạn chưa nhập email',
            'email.unique' => 'Email đã tồn tại',
            'password.required' => 'Bạn chưa nhập mật khẩu',
            'password.min' => 'Mật khẩu phải có ít nhất 3 ký tự',
            'password.max' => 'Mật khẩu chỉ được tối đa 32 ký tự',
            'phone.required' => 'Bạn chưa nhập số điện thoại',
            'phone.max' => 'số điện thoại chỉ được tối đa 11 số',
        ]);
        $user = new User;
        $user->name = $request->name;
        $user->username = $request->username;
        $user->password = bcrypt($request->password);
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $name = $file->getClientOriginalName();
            $avatar = str_random(4) . "_" . $name;
            while (file_exists("admin/avatar" . $avatar)) {
                $avatar = str_random(4) . "_" . $name;
            }
            $file->move("admin/avatar", $avatar);
            $user->avatar = $avatar;
        } else {
            $user->avatar = "";
        }
        $user->save();
        $users = User::find($user->id);
        $users->roles()->attach($request->role);
        return redirect('shoes/admin/users/danhsach')->with('thongbao', 'Bạn thêm thành công');
    }

    public function getSua($id)
    {
        $roles = Role::all();
        $users = User::find($id);
        return view('admin.users.edit_user', compact('users', 'roles'));
    }

    public function postSua(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'username' => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'required',
        ], [
            'name.required' => 'Bạn chưa nhập tên người dùng',
            'username.required' => 'Bạn chưa nhập tên đăng nhập',
            'name.min' => 'Tên người dùng phải có ít nhất 3 ký tự',
            'username.min' => 'Tên đăng nhập phải có ít nhất 3 ký tự',
            'phone.required' => 'Bạn chưa nhập số điện thoại',
        ]);
        $user = User::find($id);
        $user->roles()->sync($request->role);
        $user->name = $request->name;
        $user->username = $request->username;
        if ($request->changePassword == "on") {
            $this->validate($request, [
                'password' => 'required|min:3|max:32',
            ], [
                'password.required' => 'Bạn chưa nhập mật khẩu',
                'password.min' => 'Mật khẩu phải có ít nhất 3 ký tự',
                'password.max' => 'Mật khẩu chỉ được tối đa 32 ký tự',
            ]);
            $user->password = bcrypt($request->password);
        }
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');

            $name = $file->getClientOriginalName();
            $avatar = str_random(4) . "_" . $name;
            while (file_exists("admin/avatar" . $avatar)) {
                $avatar = str_random(4) . "_" . $name;
            }
            $file->move("admin/avatar", $avatar);
            if (!empty($user->avatar) && File::exists("admin/avatar/" . $user->avatar)) {
                unlink("admin/avatar/" . $user->avatar);
            }
            $user->avatar = $avatar;
        }
        $user->save();
        return redirect('shoes/admin/users/danhsach')->with('thongbao', 'Bạn đã sửa thành công');
    }

    public function getXoa($id)
    {
        $user = User::find($id);
        $user->roles()->sync([]);
        $user->delete();
        return redirect('shoes/admin/users/danhsach')->with('thongbao', 'Bạn đã xóa thành công');
    }

    public function getSearch(Request $request)
    {
        $users = User::where('id', 'like', '%' . $request->key . '%')->orwhere('name', 'like', '%' . $request->key . '%')
            ->orwhere('username', 'like', '%' . $request->key . '%')->orwhere('email', 'like', '%' . $request->key . '%')->orwhere('phone', 'like', '%' . $request->key . '%')->orwhere('address', 'like', '%' . $request->key . '%')->paginate(5);
        return view('admin.users.search_user', compact('users'));
    }
}