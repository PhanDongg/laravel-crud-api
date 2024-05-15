<?php
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;

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
Route::get('/', [App\Http\Controllers\PostController::class, 'index'])->name('home');

//  Routes defaut
Route::match(['get', 'post'], '/dashboard', function(){
    return view('dashboard');
});
Route::view('/pages/slick', 'pages.slick');
Route::view('/pages/datatables', 'pages.datatables');
Route::view('/pages/blank', 'pages.blank');

Route::view('/pages/category/categories', 'pages.categories');

//login
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');

//loguot
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

//create user
Route::get('/register', [App\Http\Controllers\UserController::class, 'create'])->name('register');
Route::post('/register', [App\Http\Controllers\UserController::class, 'store'])->name('complete.register');

//error
Route::get('/error', function()
{
    return view('op_error_500');
})->name('error');

// author admin
Route::middleware('auth.admin')->prefix('admin')->group(function () {
    //POST
    //route add post
    Route::post('/add-post', [App\Http\Controllers\PostController::class, 'addPost'])->name('post.addpost');
    //route all post
    Route::get('/add-post', [App\Http\Controllers\PostController::class, 'addForm'])->name('post.addpost');//xử lí slect option cate
    Route::get('/posts', [App\Http\Controllers\PostController::class, 'posts'])->name('posts');//VIEW CHÍNH ok
    //edit post
    Route::get('/update/{id}', [App\Http\Controllers\PostController::class, 'edit'])->name('post.update');
    //update post
    Route::post('/update/{id}', [App\Http\Controllers\PostController::class, 'update'])->name('post.update');
    Route::post('/update/{id}', [App\Http\Controllers\PostController::class, 'updateCate'])->name('post.update');
    //delete post
    Route::get('/delete/{id}', [App\Http\Controllers\PostController::class, 'delete'])->name('post.delete');

    //CATEGORY
    //add cate
    Route::post('/add-category', [App\Http\Controllers\CategoryController::class, 'add_category'])->name('cate.addcategory');
    //all cate
    Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'categories'])->name('cate.categories');
    //eidt cate
    Route::get('/update-category/{id}', [App\Http\Controllers\CategoryController::class, 'edit'])->name('cate.update-category');
    //update cate
    Route::post('/update-category/{id}', [App\Http\Controllers\CategoryController::class, 'update'])->name('cate.update-category');
    //delete
    Route::get('/delete-category/{id}', [App\Http\Controllers\CategoryController::class, 'delete'])->name('cate.delete-category');
});

// author admin
Route::middleware('auth.user')->prefix('user')->group(function () {
//task này chưa dùng tới
});
//post detail
Route::get('/post-detail/{id}', [App\Http\Controllers\PostController::class, 'postDetail'])->name('post-detail');