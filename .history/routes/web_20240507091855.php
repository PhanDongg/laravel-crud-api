<?php
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home-login', function () {
    return view('login');
});

// //create user
// Route::get('/users/create', [App\Http\Controllers\UserController::class, 'create']);
// Route::post('/users/create', [App\Http\Controllers\UserController::class, 'store']);

// // update user
// Route::get('/users/update/{id}', [App\Http\Controllers\UserController::class, 'edit']);
// Route::post('/users/update/{id}', [App\Http\Controllers\UserController::class, 'update']);

// //delete user
// Route::get('/users/delete/{id}', [App\Http\Controllers\UserController::class, 'delete']);

// // Read user
// Route::get('/users', [App\Http\Controllers\UserController::class, 'index']);


// API
Route::get('/api/users', [App\Http\Controllers\UserController::class, 'index_api']);


Route::get('/check', [UserController::class, 'check']);
// route admin
Route::middleware('auth.admin')->prefix('admin')->group(function () {
// Route::prefix('admin')->group(function () {
    Route::get('/login', [App\Http\Controllers\Admin\DashboardController::class, 'index']);

    //create user
    Route::get('/users/create', [App\Http\Controllers\UserController::class, 'create']);
    Route::post('/users/create', [App\Http\Controllers\UserController::class, 'store']);

    // update user
    Route::get('/users/update/{id}', [App\Http\Controllers\UserController::class, 'edit']);
    Route::post('/users/update/{id}', [App\Http\Controllers\UserController::class, 'update']);

    //delete user
    Route::get('/users/delete/{id}', [App\Http\Controllers\UserController::class, 'delete']);

    // Read user
    Route::get('/users', [App\Http\Controllers\UserController::class, 'index']);
});

// authen author
// Đăng nhập và đăng ký
//sẽ tạo ra các route cần thiết cho đăng nhập và đăng kí người dùng
// Auth::routes();

// Route::get('/', [PostController::class, index])->name('post.index');
// Route::get('/post/create', [PostController::class, 'create'])->name('posts.create');
// Route::post('/post', [PostController::class, 'store'])->name('posts.store');
// Route::get('/posts/{post}/edit', [PostController::class, 'eidt'])->name('posts.edit');
// Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
// Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');