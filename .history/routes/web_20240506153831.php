<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\Admin\DashboardController;
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


// API
Route::get('/api/users', [App\Http\Controllers\UserController::class, 'index_api']);

// route admin
Route::middleware('auth.admin')->prefix('admin')->group(function ()
{
    Route::get('', [DashboardController::class], 'index');
});