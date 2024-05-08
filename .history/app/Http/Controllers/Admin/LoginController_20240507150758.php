<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Admin::attempt($credentials)) {
        // Authentication passed
        return redirect()->intended('dashboard');
    } else {
        return redirect()->back()->with('error', 'Đăng nhập không thành công');
    }
}
}
