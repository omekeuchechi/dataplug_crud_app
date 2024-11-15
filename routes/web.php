<?php

use App\Http\Controllers\ThemeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function ()
// {
//     return view('welcome');
// });

// Route::get('/', [ThemeController::class, 'readCookie']);

Route::get('/nav', function () {
    return view('component.nav');
});

Route::get('/do', function () {
    return view('component.do');
});

Route::get('/ds', function () {
    return view('component.ds');
});
Route::get('/in', function () {
    return view('component.index');
});

Route::get('/txt', function () {
    return view('component.admintxt');
});

// Route::prefix('/admin')->group(function () {
//     Route::get('/index', [IndexController::class, 'index']);
//     Route::get('/setting');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
