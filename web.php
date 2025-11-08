<?php

use App\Http\Controllers\Controller;

use App\Http\Controllers\KhachSanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\ControllerXinchaotest;
use App\Http\Controllers\Tinhgiaithua;
use App\Http\Controllers\userinfo;
use App\Http\Controllers\HocController;
use App\Http\Controllers\SinhVienControler;
use App\Http\Controllers\SinhVienController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', [ControllerXinchaotest::class, 'Sayhello']);
Route::get('/page/hello',[ControllerXinchaotest::class,'WelcometoLaravel']);
Route::get('/tinhgiaithua/{n}',[Tinhgiaithua::class,'tinhgiaithua']);
Route::get('/page/info',[userinfo::class,'info']);
Route::get('/hoc',[HocController::class,'tenaido']);
Route::get('/sinhvien',[SinhVienControler::class,'SVBK']);
Route::get('/khachsan',[KhachSanController::class,'khachsantuyetvoinhat']);

//


Route::prefix('students')->group(function () {
Route::get('/',[SinhVienController::class,'index']) ->name('students.index');
Route::get('/create',[SinhVienController::class,'create']) ->name('students.create');
Route::post('/store',[SinhVienController::class,'store']) ->name('students.store');
Route::get('/search',[SinhVienController::class,'search']) ->name('students.search');

});