<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
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
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware('auth');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::delete('/dashboard/{id}', [DashboardController::class, 'destroy'])->name('dashboard.destroy');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    // carritodelhelao
    Route::get('/cart', [PurchaseController::class, 'index']);
    Route::post('/cart/add', [PurchaseController::class, 'add'])->name('cart.add');
    Route::post('/cart/update/{id}', [PurchaseController::class, 'update'])->name('cart.update');
    Route::post('/cart/remove/{id}', [PurchaseController::class, 'remove'])->name('cart.remove');
});
Route::get('/register', [LoginController::class, 'showLoginForm'])->name('register');
Route::post('/register', [RegisterController::class, 'create']);

Route::get('/pendientes', [ProductController::class, 'index'])->name('products.index');
Route::get('/pendientes/{product}', [ProductController::class, 'show'])->name('products.show');
// Route::get('/galeria', function () {
//     $imagenes = [];
//     foreach(File::allFiles(public_path('img/fotosSinFiltrar/Artisticas-Expo')) as $archivo) {
//         $url = asset('img/fotosSinFiltrar/Artisticas-Expo/' . $archivo->getFilename());
//         $imagenes[] = $url;
//     }

//     return view('navPages.galeria', compact('imagenes'));
// });
Route::get('/aboutUs', function () {
    return view('navPages.aboutUs');
});
Route::get('/contact', function () {
    return view('navPages.contact');
});
Route::post('/enviar-correo', [ContactController::class, 'enviarCorreo'])->name('enviar-correo');
//Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

