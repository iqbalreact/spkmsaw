<?php

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

// Route::middleware(['role:admin'])->group(function () {
Route::prefix('admin')->group(function () {


    // Smartphone Route 
    Route::resource('kriteria', KriteriaController::class);
    Route::resource('sub-kriteria', SubKriteriaController::class);
    Route::resource('alternatif', AlternatifController::class);
    Route::resource('nilai-alternatif', NilaiAlternatifController::class);
    // end 

    Route::resource('/pengguna', UserController::class);
    Route::post('/pengguna/update', 'UserController@updatePengguna')->name('update-pengguna');
    Route::get('/pengguna/delete/{id}', 'UserController@deletePengguna')->name('delete-pengguna');

    Route::get('/rekomendasi', 'PerhitunganController@index')->name('index-rekomendasi');
    Route::get('/rekomendasi/hasil', 'PerhitunganController@perhitungan')->name('perhitungan');

    
});
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/admin/dashboard', 'HomeController@dashboard')->name('dashboard');

