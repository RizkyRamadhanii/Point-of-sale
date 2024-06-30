<?php

use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\OrderController;

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
route::get('/', [PenjualanController::class, 'index']);
Route::resource('/penjualan', PenjualanController::class);

Route::get('/dashboard', function () {
    return view('admin.pages.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

route::resource('/admin', ProductController::class);
Route::resource('/product', ProductController::class);

});

Route::get('/bill/{invoice}', [PenjualanController::class, 'bill'])->name('client.bill');

require __DIR__.'/auth.php';
