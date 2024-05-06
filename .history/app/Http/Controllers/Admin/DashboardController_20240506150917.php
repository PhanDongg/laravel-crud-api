<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //nếu muốn tác động tới tất cả action trong controller; luôn luôn tự động chạy đầu tiên
    public function __construct()
    {
        
    }
    public function index()
    {
        return 'Dashboad wellcome';
    }
}
