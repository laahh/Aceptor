<?php

use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Crypt;
use App\Models\Post; //tambahkan/ import model post yang akan digunakan
use App\Models\Category;
use App\Models\User;
use App\Models\admin;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

// Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
// Route::post('/login', [LoginController::class, 'authenticate']);
// Route::post('/logout', [LoginController::class, 'logout']);

// Route::get('/register', [RegisterController::class, 'index']);
// Route::post('/register', [RegisterController::class, 'store']);


Route::get('/dashboard', function () {
    return view('user.layout.layout');
});

Route::get('/apa-itu-tbc', function () {
    return view('apa-itu-tbc');
})->middleware('verified');

Route::get('/rumah-sakit', function () {
    return view('rumah-sakit');
});

Route::get('/quiz', function () {
    return view('quiz');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/artikel', [PostController::class, 'index']);


Route::get('post/{post:slug}', [PostController::class, 'show']);


Route::get('categories/{category:slug}', function (Category $category) {
    return view('artikel', [
        'title' => $category->name,
        'posts' => $category->posts->load('category'),
        'category' => $category->name,


    ]);
});

// checkout
Route::post('/checkout', [OrderController::class, 'checkout']);


// admin 
Route::get('/admin-login', [AdminLoginController::class, 'index']);
Route::post('/admin-login', [AdminLoginController::class, 'authenticate']);


Route::get('/admin-dashboard', function () {
    return view('admin.dashboard', [
        'title' => 'Dashboard'
    ]);
});

// Route::get('/admin-artikel', function () {
//     return view('admin.artikel');
// });


Route::get('/admin-user', function () {
    return view('admin.user', [
        'title' => 'User',
        'users' => User::all()


    ]);
});

Route::get('/auth/redirect', [LoginController::class, 'redirectToProvider']);
Route::get('/auth/callback', [LoginController::class, 'handleProviderCallback']);


Route::get('/admin-artikel/CheckSlug', [DashboardPostController::class, 'CheckSlug']);

// Route::resource('admin-artikel', DashboardPostController::class);
Route::resource('admin-artikel', DashboardPostController::class)->parameters([
    'admin-artikel' => 'post',
]);
