<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeightController;
use App\Http\Controllers\AuthController;

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

//会員登録画面表示
Route::get('/register/step1', [AuthController::class, 'editUser'])->name('register1');
Route::post('/register/step1', [AuthController::class, 'registerUser']);

//新規会員登録：初期目標体重登録画面表示
Route::get('/register/step2', [AuthController::class, 'newWeight'])->name('newWeight');
//Route::post('/register/')

//体重管理画面(トップ画面)：表示
Route::get('/weight_logs', [WeightController::class, 'manageWeight'])->name('manageWeight');

//ログイン画面表示
Route::get('/login', [AuthController::class, 'login'])->name('login');

//ログイン処理
//Route::post('/login/{id}', [AuthController::class, 'authenticate']);

//ログアウト

//目標体重変更：画面表示
Route::get('/weight_logs/goal_setting', [WeightController::class, 'goalEdit'])->name('goalEdit');
//目標体重変更：更新ボタン押下
Route::patch('/weight_logs/goal_setting', [WeightController::class, 'goalUpdate'])->name('goalUpdate');


//体重登録
//Route::post('/weight_logs/create', [WeightController::class, 'manageWeight']);