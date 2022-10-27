<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\RTHController;
use App\Http\Controllers\RTHPrivatController;
use App\Http\Controllers\RTHPublikController;
use App\Http\Controllers\RTHTotalController;
use App\Http\Controllers\KTPPohonController;
use App\Http\Controllers\KontakKamiController;



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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/map', [MapController::class, 'index'])->name('map');
Route::get('/rth', [RTHController::class, 'index'])->name('rth');
Route::get('/ktppohon', [KTPPohonController::class,'index'])->name('ktppohon');
Route::get('/rthprivat', [RTHPrivatController::class, 'index'])->name('rthprivat');
Route::get('/rthpublik', [RTHPublikController::class, 'index'])->name('rthpublik');
Route::get('/rthtotal', [RTHTotalController::class, 'index'])->name('rthtotal');
Route::get('/kontakkami', [KontakKamiController::class,'index'])->name('kontakkami');