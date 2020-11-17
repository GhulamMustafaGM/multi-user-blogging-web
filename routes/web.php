<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BlogsController; 
use App\Http\Controllers\HomeController;

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


Route::get('/', [BlogsController::class, 'index']);

Auth::routes();

// Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('blogs',[BlogsController::class, 'index'])->name('blogs');

Route::get('blogs/create',[BlogsController::class, 'create'])->name('blogs.create');
Route::post('blogs/store',[BlogsController::class, 'store'])->name('blogs.store');
Route::get('blogs/{id}', [BlogsController::class, 'show'])->name('blogs.show');

Route::get('blogs/{id}/edit', [BlogsController::class, 'edit'])->name('blogs.edit');
Route::patch('blogs/{id}/update', [BlogsController::class, 'update'])->name('blogs.update');

Route::delete('blogs/{id}/delete', [BlogsController::class, 'delete'])->name('blogs.delete');


