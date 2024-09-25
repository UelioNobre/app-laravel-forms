<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::prefix('/posts')->group(function () {
    Route::get('', [PostController::class, 'index'])->name('posts');
    Route::get('add', [PostController::class, 'create'])->name('posts-add');
    Route::post('add', [PostController::class, 'store'])->name('posts-create');
});
