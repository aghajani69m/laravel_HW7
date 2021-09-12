<?php

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

use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Auth;
Route::get('/',[HomeController::class,'home'])->name('index');
// Route::get('/posts/{post}' , [PostController::class,'singleShow'])->name('singleShow');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/contact', [HomeController::class,'contact'])->name('contact');

Route::prefix('admin')->middleware('auth')->group(function() {
    Route::resource('posts' , PostController::class);
});
Route::resource('tags', TagController::class);

Auth::routes();
