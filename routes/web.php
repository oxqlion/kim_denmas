<?php

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
    return view('components.parent');
});

Route::get('pembukuan', function() {
    return view('pembukuan');
})->name('pembukuan-main');

Route::get('home', function() {
    return view('home');
})->name('home');


