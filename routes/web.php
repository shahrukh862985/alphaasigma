<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',"Site\HomeController@index")->name('home');


//Admin Routes
Route::prefix('admin')->group(function () {

    Route::get('/','Admin\AuthController@showLoginForm')->name('admin.login')->middleware('guest:admin');
    Route::post('/login','Admin\AuthController@login')->name('admin.login.post');
    Route::middleware('auth:admin')->group(function () {
        Route::get('/dashboard','Admin\HomeController@dashboard')->name('admin.dashboard');
        Route::post('/logout','Admin\AuthController@logout')->name('admin.logout');
        Route::post('/passwordchange','Admin\AuthController@changePassword')->name('admin.change.password');
    });
});