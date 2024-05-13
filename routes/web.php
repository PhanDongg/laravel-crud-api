<?php
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostsController;

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
// Route::get('/', 'PostsController@index');//tại sao thằng này ko được mà thằng dưới lại đc
Route::get('/', [App\Http\Controllers\PostsController::class, 'index'])->name('home');

//  Routes defaut
// Route::view('/', 'landing');
Route::match(['get', 'post'], '/dashboard', function(){
    return view('dashboard');
});
Route::view('/pages/slick', 'pages.slick');
Route::view('/pages/datatables', 'pages.datatables');
Route::view('/pages/blank', 'pages.blank');

Route::view('/pages/posts', 'pages.posts');
Route::view('/pages/add-post', 'pages.addpost');
Route::view('/pages/categories', 'pages.categories');

//POST
//route add post
Route::post('/pages/add-post', [App\Http\Controllers\PostController::class, 'add_post'])->name('pages.addpost');

//route all post
Route::get('/pages/posts', [App\Http\Controllers\PostsController::class, 'posts'])->name('pages.posts');//VIEW CHÍNH

//route add new post
Route::get('/pages/add-post', [App\Http\Controllers\PostsController::class, 'addNew'])->name('pages.add-posts');

//đầu tiên phải chỉnh sửa và sau đó mới cập nhật
//edit post
Route::get('/pages/update/{id}', [App\Http\Controllers\PostsController::class, 'edit'])->name('pages.update');
//update post
Route::post('/pages/update/{id}', [App\Http\Controllers\PostsController::class, 'update'])->name('pages.update');

//delete post
Route::get('/pages/delete/{id}', [App\Http\Controllers\PostsController::class, 'delete'])->name('pages.delete');


//CATEGORY
//add cate
// Route::post('/pages/add-category', [App\Http\Controllers\CategoryController::class, 'add_category'])->name('pages.addcategory');

//all cate
Route::get('/pages/categories', [App\Http\Controllers\CategoryController::class, 'categories'])->name('pages.categories');

//add cate chưa xong
// Route::get('/pages/categories', [App\Http\Controllers\CategoryController::class, 'add_category'])->name('pages.category');

//update cate
//delete











Route::get('/home-login', function () {
    return view('login');
})->name('home-login');

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
