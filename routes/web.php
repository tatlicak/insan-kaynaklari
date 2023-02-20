<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonelController;
use App\Http\Controllers\DepartmanController;

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

@include_once('admin_web.php');

Route::get('/', function () {
    return redirect()->route('login');
})->name('/');

Route::prefix('starter-kit')->group(function () {
    Route::view('index', 'admin.color-version.index')->name('index');
});


Route::get('personel',[DepartmanController::class,'get'] )->name('personel')->middleware('auth');
Route::post('personel/kaydet',[PersonelController::class,'save'] )->name('perSave');
Route::get('personel/detay/{id}',[PersonelController::class,'detay'] )->name('perDetay')->middleware('auth');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
