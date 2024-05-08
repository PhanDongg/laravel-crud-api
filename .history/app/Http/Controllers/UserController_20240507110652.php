<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
// Thêm thư viện để mã hóa password
use Illuminate\Support\Facades\Hash;
use PharIo\Manifest\Author;

class UserController extends Controller
{
    public function create()
    {
        // return view('users.create');
        return view('create');
    }

    public function store(Request $request)
    {
        // Kiểm tra xem dữ liệu từ client gửi lên bao gốm những gì
        // dd($request);

        // gán dữ liệu gửi lên vào biến data
        $data = $request->all();
        // dd($data);
        // mã hóa password trước khi đẩy lên DB
        $data['password'] = Hash::make($request->password);

        // Tạo mới user với các dữ liệu tương ứng với dữ liệu được gán trong $data
        User::create($data);
        // echo "success create user";
        //lấy ra toàn bộ user
        $users = User::all();
        return view('index', compact('users'));
    }

    public function edit($id)
    {
        // Tìm đến đối tượng muốn update
        $user = User::findOrFail($id);

        // điều hướng đến view edit user và truyền sang dữ liệu về user muốn sửa đổi
        // return view('users.edit', compact('user'));
        return view('edit', compact('user'));

        // // author
        // $user = User::find($id);

        // if (auth()->user()->isAdmin()) {
        //     return view('admin.edit', compact('user'));
        // } else {
        //     return redirect()->back()->with('error', 'Bạn không có quyền truy cập');
        // }
    }

    public function update(Request $request, $id)
    {
        // // Tìm đến đối tượng muốn update
        // $user = User::findOrFail($id);

        // // gán dữ liệu gửi lên vào biến data
        // $data = $request->all();
        // // dd($data);
        // // mã hóa password trước khi đẩy lên DB
        // $data['password'] = Hash::make($request->password);

        // // Update user
        // $user->update($data); // Sử dụng instance $user để gọi phương thức update()
        // // echo "success update user";
        // $users = User::all();
        // return view('index', compact('users'));

        // author
        $user = User::find($id);

        if (auth()->user()->isAdmin()) {
            // Logic để cập nhật thông tin người dùng
            return redirect()->route('users.index')->with('success', 'Cập nhật người dùng thành công');
        } else {
            return redirect()->back()->with('error', 'Bạn không có quyền truy cập');
        }
    }

    public function delete($id)
    {
        // // Tìm đến đối tượng muốn xóa
        // $user = User::findOrFail($id);

        // $user->delete();
        // echo"success delete user";
        // // $users = User::all();
        // // return view('index');

        // Author
        $user = User::find($id);

        if (auth()->user()->isAdmin()) {
            // Logic để xóa người dùng
            return redirect()->route('users.index')->with('success', 'Xóa người dùng thành công');
        } else {
            return redirect()->back()->with('error', 'Bạn không có quyền truy cập');
        }
    }

    public function index()
    {
        // lấy ra toàn bộ user
        $users = User::all();
        //dd($users);

        // trả về view hiển thị danh sách user
        return view('index', compact('users'));
    }

    public function index_api()
    {
        // lấy ra toàn bộ user
        $users = User::all();

        // trả về danh sách user dưới dạng JSON
        return response()->json($users);
    }

}
