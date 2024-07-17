<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Middleware\IsAdmin;
use App\Model\Kategori;
use App\Model\Komentar;
use App\Model\Artikel;


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
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [FrontController::class, 'index']);
Route::get('artikel/{id}', [FrontController::class, 'detail']);




Route::group(['prefix' => 'admin', 'middleware' => ['auth', IsAdmin::class]], function () {
    Route::get('/', function () {
        return view('admin.index');
    });
    // untuk Route Backend Lainnya

    Route::resource('user', App\Http\Controllers\UsersController::class);

    Route::resource('kategori', App\Http\Controllers\KategoriController::class);

    Route::resource('komentar', App\Http\Controllers\KomentarController::class);

    Route::resource('artikel', App\Http\Controllers\ArtikelController::class);


});

