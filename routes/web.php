<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HobyController;

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

//home画面表示
Route::get('/',[HobyController::class,'showHome'])->name('home');

//ログイン処理
Route::get('/LoginPage',[HobyController::class,'showLoginPage'])->name('loginpage');
Route::get('/login',[HobyController::class,'Login'])->name('login');

//新規登録
Route::get('/NewUser',[HobyController::class,'showNewUserPage'])->name('newuserpage');
Route::get('/setNewUser',[HobyController::class,'setNewUser'])->name('newuser');

//記事投稿

//メニュー
