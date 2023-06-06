<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FavouriteController;
use App\Http\Controllers\ContactMailController;
use App\Http\Controllers\PaymentController;
use App\Models\Product;

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
    // return view('welcome');
    $products = Product::take(4)->get();
    return view('welcome')->with('products', $products);
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
    Route::get('/checkout/pay', [PaymentController::class, 'show'])->name('checkout.pay');
    Route::post('/checkout/{id}', [PaymentController::class, 'checkout'])->name('checkout');

    Route::get('/favourites', [FavouriteController::class, 'index'])->name('favourites.index');
    Route::post('/favourites/{product}', [FavouriteController::class, 'addById'])->name('favourites.addbyid');
});
Route::get('/register', [LoginController::class, 'showLoginForm'])->name('register');
Route::post('/register', [RegisterController::class, 'create']);

Route::get('/login/google', [LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('/login/google/callback', [LoginController::class, 'handleGoogleCallback']);


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

Route::post('/contact', [ContactMailController::class, 'store'])->name('contact.store');

//Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

