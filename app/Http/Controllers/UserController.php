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
        // $inputs = [
        //     'email'    => 'foo',
        //     'password' => 'bar',
        // ];
        $request->validate([
            'email'=>'required|email',
            // 'password' => 'required|min:7',//if nedd add '|confirmed'
            'password' => [
                'required',
                'string',
                'min:10',             // must be at least 10 characters in length
                'regex:/[a-z]/',      // must contain at least one lowercase letter
                'regex:/[A-Z]/',      // must contain at least one uppercase letter
                'regex:/[0-9]/',      // must contain at least one digit
                'regex:/[@$!%*#?&]/', // must contain a special character
            ],
        ]);
        // $validation = \Validator::make( $inputs, $rules );

        // if ( $validation->fails() ) {
        //     print_r( $validation->errors()->all() );
        // }

        
        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        User::create($data);
        $users = User::all();
        return redirect()->route('login');
    }

}
