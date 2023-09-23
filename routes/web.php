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
    return view('home',[
        'active'=>"Home"
    ]);
});

// Route::get('pembukuan', function() {
//     return view('pembukuan',[
//         'active'=> "Pembukuan",
//         'datas'=>[
//             "dummy1",
//             "dummy2",
//             "dummy3",
//             "dummy4"
//         ]
//     ]);
// })->name('pembukuan-main');
Route::get('/pembukuan', [PembukuanController::class, 'getPembukuanWithUMKM2'])->name('pembukuan-main');
Route::get('/pembukuan/{id}', [PembukuanController::class, 'getPembukuanWithUMKM'])->name('pembukuan-admin');
// Route::get('stok', function() {
//     return view('stok',[
//         'active' =>"Stok",
//     ]);
// })->name('stok');

Route::get('/stok', [StokController::class, 'getStokWithUMKM'])->name('stok');

Route::get('umkm', function() {
    return view('umkm',[
        'active' =>"UMKM"
    ]);
})->name('umkm');


