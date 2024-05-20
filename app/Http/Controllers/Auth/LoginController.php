<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // dd($request->all());
        //validation
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], 
        [
            'password.required' => 'Please enter a password',
        ]);
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
