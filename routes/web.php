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

Route::get('/', function () {
    if (Auth::check()) {
        Route::get('dashboard', 'App\Http\Controllers\DashboardController@index');
    } else {
        return view('auth.login');
    }
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');


Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::get('dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
    Route::view('forms', 'forms')->name('forms');
    Route::view('cards', 'cards')->name('cards');
    Route::view('charts', 'charts')->name('charts');
    Route::view('buttons', 'buttons')->name('buttons');
    Route::view('modals', 'modals')->name('modals');
    Route::view('tables', 'tables')->name('tables');
    Route::view('calendar', 'calendar')->name('calendar');

    //Produk
    Route::get('produk','App\Http\Controllers\ProdukController@index')->name('produk');
    Route::post('produk/store', 'App\Http\Controllers\ProdukController@store')->name('produk.store');
    Route::get('produk/detail/{id}', 'App\Http\Controllers\ProdukController@edit')->name('produk.detail');
    Route::post('produk/update/{id}', 'App\Http\Controllers\ProdukController@update')->name('produk.update');
    Route::get('produk/delete/{id}', 'App\Http\Controllers\ProdukController@destroy')->name('produk.delete');

    //Kategori
    Route::get('kategori','App\Http\Controllers\KategoriController@index')->name('kategori');
    Route::post('kategori/store', 'App\Http\Controllers\KategoriController@store')->name('kategori.store');
    Route::get('kategori/detail/{id}', 'App\Http\Controllers\KategoriController@edit')->name('kategori.detail');
    Route::post('kategori/update/{id}', 'App\Http\Controllers\KategoriController@update')->name('kategori.update');
    Route::get('kategori/delete/{id}', 'App\Http\Controllers\KategoriController@destroy')->name('kategori.delete');

    //Varian
    Route::get('varian','App\Http\Controllers\VarianController@index')->name('varian');
    Route::post('varian/store', 'App\Http\Controllers\VarianController@store')->name('varian.store');
    Route::get('varian/detail/{id}', 'App\Http\Controllers\VarianController@edit')->name('varian.detail');
    Route::post('varian/update/{id}', 'App\Http\Controllers\VarianController@update')->name('varian.update');
    Route::get('varian/delete/{id}', 'App\Http\Controllers\VarianController@destroy')->name('varian.delete');

    //Bahan
    Route::get('bahan','App\Http\Controllers\BahanController@index')->name('bahan');
    Route::post('kategori/store', 'App\Http\Controllers\KategoriController@store')->name('kategori.store');
    Route::get('kategori/detail/{id}', 'App\Http\Controllers\KategoriController@edit')->name('kategori.detail');
    Route::post('kategori/update/{id}', 'App\Http\Controllers\KategoriController@update')->name('kategori.update');
    Route::get('kategori/delete/{id}', 'App\Http\Controllers\KategoriController@destroy')->name('kategori.delete');

    //Transaksi
    Route::get('transaksi','App\Http\Controllers\TransaksiController@index')->name('transaksi');
    Route::post('transaksi/store', 'App\Http\Controllers\TransaksiController@store')->name('transaksi.store');
    Route::get('transaksi/detail/{id}', 'App\Http\Controllers\TransaksiController@show')->name('transaksi.detail');
    Route::get('transaksi/edit/{id}', 'App\Http\Controllers\TransaksiController@edit')->name('transaksi.edit');
    Route::post('transaksi/update/{id}', 'App\Http\Controllers\TransaksiController@update')->name('transaksi.update');
    Route::get('transaksi/delete/{id}', 'App\Http\Controllers\TransaksiController@destroy')->name('transaksi.delete');

    //Apriori
    Route::get('apriori','App\Http\Controllers\AprioriController@index')->name('apriori');
    Route::post('apriori','App\Http\Controllers\AprioriController@create')->name('apriori.create');

});
