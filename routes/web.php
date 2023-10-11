<?php
use App\Http\Controllers\LoginRegisterController;
use Illuminate\Support\Facades\Route;

/*
|-----------------------------------------------------------------------
---
| Web Routes
|-----------------------------------------------------------------------
---
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
return view('home');
});

Route::get('/auth/login', [LoginRegisterController::class, 'login'])->name('auth.login');
Route::get('/auth/register', [LoginRegisterController::class,'register'])->name('auth.register');   
Route::get('/user/home', [LoginRegisterController::class, 'userHome'])->name('user.home');
Route::get('/admin/home', [LoginRegisterController::class, 'adminHome'])->name('admin.home');
Route::post('/postRegister', [LoginRegisterController::class, 'postRegister'])->name('postRegister');
Route::post('/postLogin', [LoginRegisterController::class, 'postLogin'])->name('postLogin');
Route::get('/logout', [LoginRegisterController::class, 'logout'])->name('logout');