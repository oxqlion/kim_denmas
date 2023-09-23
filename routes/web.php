<?php

use App\Http\Controllers\StokController;
use App\Http\Controllers\PembukuanController;
use Illuminate\Support\Facades\Route;
use App\Models\Pembukuan;

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

Route::get('/', function () {
    return view('home', [
        'active' => "Home"
    ]);
});
Route::get('/pembukuan', [PembukuanController::class, 'getPembukuanWithUMKM'])->name('pembukuan-main');
Route::get('/pemasukan/{id}', [PembukuanController::class, 'getPemasukan'])->name('get-pemasukan');
Route::get('/pengeluaran/{id}', [PembukuanController::class, 'getPengeluaran'])->name('get-pengeluaran');

Route::get('/stok', [StokController::class, 'getStokWithUMKM'])->name('stok');

Route::post('/storeTransaction/{id}', [PembukuanController::class, 'createPembukuan'])->name('store-transaction');

Route::get('umkm', function () {
    return view('umkm', [
        'active' => "UMKM"
    ]);
})->name('umkm');
