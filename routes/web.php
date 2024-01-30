<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [AuthController::class, 'index'])->name('login.index');
Route::post('/login', [AuthController::class, 'store'])->name('login.store');


Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/adduser', [UserController::class, 'create'])->name('user.adduser');
Route::post('/showuser', [UserController::class, 'show'])->name('user.show');
Route::post('/storeuser', [UserController::class, 'store'])->name('user.store');