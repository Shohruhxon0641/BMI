<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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
    return view('welcome',['metaTitle' => 'Welcome']);
});

// Route::get('/users/{id}', function($id) {
//     return "Hello World ".$id;
// });


Auth::routes();

Route::get('/home', [HomeController::class, 'index']);

Route::get('/rooms', [HomeController::class, 'rooms'])->name('rooms');

Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/elements', [HomeController::class, 'elements'])->name('elements');

Route::get('/singleList', [HomeController::class, 'singleList'])->name('singleList');

Route::get('/blog', [HomeController::class, 'blog'])->name('blog');

Route::get('/singleBlog', [HomeController::class, 'singleBlog'])->name('singleBlog');

Route::get('/users', [UserController::class, 'index'])->name('users')->middleware('auth');
