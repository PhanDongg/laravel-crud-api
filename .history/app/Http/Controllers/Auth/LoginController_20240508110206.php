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
            return redirect()->intended('admin/users');
        } else {
            return redirect()->back()->with('error', 'Đăng nhập không thành công');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home-login');
    }
}
