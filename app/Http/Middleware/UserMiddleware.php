<?php

namespace shoes\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            $allowAccess = false;
            $roles = Auth::user()->roles;
            foreach ($roles as $role) {
                if ($role->id == ROLE_USER || $role->id == ROLE_SALE || $role->id == ROLE_ADMIN) {
                    $allowAccess = true;
                    break;
                }
            }
            if ($allowAccess) {
                return $next($request);
            }
            return redirect('admin/login')->with('thongbao', 'Bạn không có quyền truy cập!');
        }
        return redirect('admin/login')->with('thongbao', 'Bạn chưa đăng nhập!');
    }
}
