<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\File;

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
});
Route::get('/register', [LoginController::class, 'showLoginForm'])->name('register');
Route::post('/register', [RegisterController::class, 'create']);


Route::get('/colecciones', function () {
    return view('navPages.colecciones');
});
Route::get('/pendientes', function () {
    return view('navPages.pendientes');
});
Route::get('/galeria', function () {
    $imagenes = [];
    foreach(File::allFiles(public_path('img/fotosSinFiltrar/Artisticas-Expo')) as $archivo) {
        $url = asset('img/fotosSinFiltrar/Artisticas-Expo/' . $archivo->getFilename());
        $imagenes[] = $url;
    }

    return view('navPages.galeria', compact('imagenes'));
});
Route::get('/aboutUs', function () {
    return view('navPages.aboutUs');
});
Route::get('/contact', function () {
    return view('navPages.contact');
});
//Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
