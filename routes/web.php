<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SearchController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');


Route::get('/signup', [AuthController::class, 'signup'])->name('signup');
Route::post('/store-signup', [AuthController::class, 'storesignup'])->name('storesignup');

Route::get('/signin', [AuthController::class, 'signin'])->name('signin');
Route::post('/store-signin', [AuthController::class, 'storeSignin'])->name('storeSignin');

Route::get('/logout', function() {
    Auth::logout();
    return redirect('/')->with('success', 'Berhasil Logout!');
})->name('logout')->middleware('auth');


Route::get('/users', [UserController::class, 'index'])->name('users');
Route::get('/users/{user}/modal', [UserController::class, 'showModal'])->name('users.show-modal');
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');

use App\Http\Controllers\CategoryController;
Route::resource('categories', CategoryController::class);

use App\Http\Controllers\PostController;
Route::resource('posts', PostController::class);
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

Route::get('/search', [SearchController::class, 'search'])->name('search');


