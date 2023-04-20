<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/login', [LoginController::class, 'show']);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::get('/register', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('register');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'create']);


Route::get('/colecciones', function () {
    return view('navPages.colecciones');
});
Route::get('/pendientes', function () {
    return view('navPages.pendientes');
});
Route::get('/galeria', function () {
    return view('navPages.galeria');
});
Route::get('/aboutUs', function () {
    return view('navPages.aboutUs');
});
Route::get('/contact', function () {
    return view('navPages.contact');
});
//Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
