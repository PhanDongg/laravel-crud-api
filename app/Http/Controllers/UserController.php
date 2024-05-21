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
        //validation

        $validateData = $request->validate([
            'email'=>'required|email',
            'password' => [
                'required',
                'min:6',
                'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[!$#%]).*$/',
                // 'regex:/^(?=.{12,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[!$#%]).{5,}$/'
                'confirmed'
            ],
            'password_confirmation' => 'required',
        ]);
        
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
