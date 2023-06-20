<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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
//All Posts
Route::get('/', [PostController::class, 'index']);

//Show Create Form
Route::get('/posts/create', [PostController::class, 'create']);

//Store Post Data
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

//Shoe Edit Form
Route::get('/posts/{post}/edit', [PostController::class, 'edit']);

//Update Listing
Route::put('/posts/{post}', [PostController::class, 'update']);

//Single Posts
Route::get('/posts/{post}', [PostController::
class, 'show']);

