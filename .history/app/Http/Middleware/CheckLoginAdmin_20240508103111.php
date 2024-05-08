<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckLoginAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // echo 'Middleware request';
        // dd('2');
        // return $next($request);


        // kiểm tra xem người dùng đăng nhập có phải là admin hay không. 
        // Nếu không phải admin, hãy chuyển hướng người dùng về trang khác (ví dụ: trang chủ).
        // if (auth()->check() && auth()->user()->isAdmin()) {
        //     return $next($request);
        // }

        // return redirect('/home-login');



        // if (auth()->check() && auth()->user()->role == 'admin') {
        //     return $next($request);
        // }
    
        // return redirect()->route('home-login')->with('error', 'Bạn không có quyền truy cập.');

        if (auth()->check() && auth()->user()->role != 'admin') {
            return redirect()->route('home-login')->with('error', 'Bạn không có quyền truy cập.');
        }
        return $next($request);
        //  elseif (auth()->check() && auth()->user()->role == 'user') {
        //     return redirect()->route('user.dashboards');
        // }
        
        return redirect()->route('home-login')->with('error', 'Bạn không có quyền truy cập.');


    }
}
