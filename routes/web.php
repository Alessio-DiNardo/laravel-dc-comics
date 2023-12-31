<?php

use App\Http\Controllers\Admin\ComicsController as AdminComicsController;
use Illuminate\Support\Facades\Route;

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


Route::get('admin/comics', [AdminComicsController::class, 'index'])->name('admin.comic.index');
Route::get('/admin/comics/create', [AdminComicController::class, 'create'])->name('admin.comic.create');
Route::get('admin/comics/{id}', [AdminComicsController::class, 'show'])->name('admin.comic.show');