<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/show', [HomeController::class, 'show'])->name('home.show');

Route::get('/import-name', [HomeController::class, 'import'])->name('home.import');
Route::get('/hapus-name', [HomeController::class, 'hapus'])->name('home.hapus');
Route::get('/hapus-sertif/destroy/{id}', [HomeController::class, 'destroy'])->name('home.destroy');
Route::post('/import-name/push', [HomeController::class, 'importpush'])->name('home.push');
