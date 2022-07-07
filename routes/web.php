<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

//index-dashboard page
Route::get('/', [PagesController::class, 'index'])->middleware('auth');

//Navlinks
Route::get('home', [PagesController::class,'home']);
Route::get('posts', [PagesController::class,'posts']);
Route::get('gigs', [PagesController::class,'gigs']);
Route::get('chats', [PagesController::class,'chats']);

//Login
Route::get('login', [PagesController::class,'login']);
Route::post('login', [AuthController::class,'login'])->name('login');

//Register
Route::get('register', [PagesController::class,'register']);
Route::post('register', [AuthController::class,'register'])->name('register');

//Logout
Route::post('logout', [AuthController::class, 'logout'])->name('logout');


