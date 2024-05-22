<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;// Thêm thư viện để mã hóa password
use PharIo\Manifest\Author;

class UserController extends Controller
{
    public function create()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        //xác thực các điều kiện
        $validateData = $request->validate([
            'email'=>'required|email',
            'password' => [
                'required',
                'min:6',
                'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[!$#%]).*$/',
                'confirmed'
            ],
            'password_confirmation' => 'required',
        ]);
        
        //kiểm tra email đã tồn tại trong database hay chưa
        $existingUser = User::where('email', $validateData['email'])->first();
        if($existingUser) {
            return back()->withInput()->withErrors(['email' => 'Email đã tồn tại. Vui lòng chọn email khác.']);
        }

        //hash password and create user
        $validateData['password'] = Hash::make($validateData['password']);
        User::create($validateData);

        // $data = $request->all();
        // $data['password'] = Hash::make($request->password);
        // User::create($data);
        // $users = User::all();
        return redirect()->route('login');
    }

}
