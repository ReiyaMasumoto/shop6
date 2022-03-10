<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

// Route::get('/login', function () {
//     return view('login');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//商品一覧画面を表示
Route::get('/', [ProductController::class, 'showList'])->name('items'); 

//商品登録画面を表示
Route::get('/create', [ProductController::class, 'showCreate'])->name('create');

//商品登録
Route::post('/store', [ProductController::class, 'exeCreate'])->name('store'); 


Route::resource('/upload',[ProductController::class, 'exeUpload'])->name('upload');



