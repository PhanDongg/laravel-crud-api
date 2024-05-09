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

// Route::match(['get', 'post'], '/dashboard', function(){
//     // Route::match('/dashboard', function(){  
//     return view('dashboard');
// });


// Route::get('/demoooo', function () {
//     return view('auth/login');
// });
// Route::get('/demoooo', function () {
//     return view('auth/register');
// });
// Route::get('/demoooo', function () {
//     return view('auth/verify');
// });
// Route::get('/demoooo', function () {
//     return view('auth/passwords/confirm');
// });
// Route::get('/demoooo', function () {
//     return view('auth/passwords/email');
// });
// Route::get('/demoooo', function () {
//     return view('auth/passwords/reset');
// });

Route::get('/demoooo', function () {
    return view('home');
});

// Example Routes
Route::view('/', 'landing');
Route::match(['get', 'post'], '/dashboard', function(){
    return view('dashboard');
});
Route::view('/pages/slick', 'pages.slick');
Route::view('/pages/datatables', 'pages.datatables');
Route::view('/pages/blank', 'pages.blank');



Route::get('/home-login', function () {
    return view('login');
})->name('home-login');


// API
Route::get('/api/users', [App\Http\Controllers\UserController::class, 'index_api']);

//login
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');

//loguot
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');


// route admin
Route::middleware('auth.admin')->prefix('admin')->group(function () {
// Route::prefix('admin')->group(function () {
    // Route::get('/login', [App\Http\Controllers\Admin\DashboardController::class, 'index']);

    //create user
    Route::get('/users/create', [App\Http\Controllers\UserController::class, 'create']);
    Route::post('/users/create', [App\Http\Controllers\UserController::class, 'store']);

    // update user
    Route::get('/users/update/{id}', [App\Http\Controllers\UserController::class, 'edit']);
    Route::post('/users/update/{id}', [App\Http\Controllers\UserController::class, 'update']);

    //delete user
    Route::get('/users/delete/{id}', [App\Http\Controllers\UserController::class, 'delete']);

    // Read user
    Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users');

    //home dashboard
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');
});


//route user
Route::middleware('auth.user')->prefix('user')->group(function () {

    //create user
    Route::get('/users/create', [App\Http\Controllers\UserController::class, 'create']);
    Route::post('/users/create', [App\Http\Controllers\UserController::class, 'store']);

    // Read user
    Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users');

    //home dashboard
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('user.dashboards');
});
