<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KuisionerController;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/x', function () {
    return view('ahaha');
});

// Route::get('/tryadd', [KuisionerController::class,'tryadd'])->name('tryadd');
Route::resource('kuisioner', KuisionerController::class);
// Route::get('/show', [KuisionerController::class, 'show']);
// Route::get('/create', [KuisionerController::class, 'create']);
Route::post('/tambah', [KuisionerController::class,'tambah'])->name('tambah');

Route::post('/store', [KuisionerController::class,'store'])->name('store');
Route::get('/hasil', [KuisionerController::class,'admin'])->name('admin');