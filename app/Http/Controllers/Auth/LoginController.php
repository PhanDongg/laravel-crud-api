<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // dd($request->all());
        //validation
        $validateAccount = $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required',
            ],
            [
                'password.required' => 'Please enter a password',
            ]
        );

        //kiểm tra tài khoản email có trong database hay không
        $checkUser = User::where('email', $validateAccount['email'])->first();
        if (!$checkUser) {
            return back()->withInput()->withErrors(['email' => 'Tài khoản này chưa được đăng ký !']);
        }

        //check có đúng mật khẩu hay không
        if (!Hash::check($validateAccount['password'], $checkUser->password)) {
            return back()->withInput()->withErrors(['password' => 'Mật khẩu không chính xác !']);
        }

        //kiểm tra trong data
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed
            $user = Auth::user();
            if ($user->role == 'admin') {
                return redirect()->intended('/dashboard');
            } elseif ($user->role == 'user') {
                return redirect()->intended('/');
            }
        } else {
            return back()->with('error', 'Đăng nhập không thành công');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
