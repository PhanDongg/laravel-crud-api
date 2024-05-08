<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed
            return redirect()->intended('dashboard');
        } else {
            return redirect()->back()->with('error', 'Đăng nhập không thành công');
        }
    }
}


// use Illuminate\Support\Facades\Auth;
// use Illuminate\Http\Request;

// class LoginController extends Controller
// {
//     public function login(Request $request)
//     {
//         $credentials = $request->only('email', 'password');

//         if (Auth::attempt($credentials)) {
//             // Authentication passed
//             return redirect()->intended('dashboard');
//         } else {
//             return redirect()->back()->with('error', 'Đăng nhập không thành công');
//         }
//     }
// }