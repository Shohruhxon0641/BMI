<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\RoomBronController;

use App\Models\Room;

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

// Route::get('/', function () {
//     $rooms = Room::orderByDesc('created_at');
//     // dd($rooms);
//     return view('welcome',[
//         'rooms' => $rooms,
//         'metaTitle' => 'test'
//     ]);
// });

// Route::get('/users/{id}', function($id) {
//     return "Hello World ".$id;
// });


Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/rooms', [HomeController::class, 'rooms'])->name('rooms');

Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/blog', [HomeController::class, 'blog'])->name('blog');

// Route::get('/singleBlog/{id}', [HomeController::class, 'singleBlog'])->name('singleBlog');

// Route::post('singleBlog/index/{id}', CommitAndBronController::class)->name('singleBlog');


Route::resource('comment', CommentController::class)->only(['store', 'show'])->middleware('auth');

Route::resource('bronroom', RoomBronController::class)->only(['store'])->middleware('auth');


// Route::get('/users', [UserController::class, 'index'])->name('users')->middleware('auth');

Route::resource('users', UserController::class)->middleware('auth');
