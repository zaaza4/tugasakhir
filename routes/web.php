<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;




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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [PageController::class, 'home'])->name('home');

// Hanya satu route /produk yang mengarah ke ProductController
// Menampilkan halaman produk (GET)
Route::get('/produk', [ProductController::class, 'index'])->name('produk');

// Menyimpan produk baru (POST)
Route::post('/produk', [ProductController::class, 'store'])->name('produk.store');


Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/create', [PageController::class, 'create'])->name('create');
Route::get('/kontak', [PageController::class, 'kontak'])->name('kontak');
// Mengarah ke fungsi showDashboard di controller

Route::resource('products', ProductController::class); // Ini akan membuat rute untuk semua aksi CRUD
Route::resource('orders', OrderController::class);
Route::get('/dashboard', [OrderController::class, 'dashboard'])->name('dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
