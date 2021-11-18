<?php

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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// TODO: arithmetic page
Route::get('/uji-coba', 'Test\UjicobaController@index');
Route::post('/uji-coba/store', 'Test\UjicobaController@store')->name('uji-coba.store');

// TODO: welcome page
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// TODO: home page
Route::get('/home', 'HomeController@index')->name('home');

// TODO: Book pages
Route::group(['prefix' => 'books'], function () {
    route::get('/', 'BookController@index')->name('books');
    route::get('/create', 'BookController@create')->name('books.create');
    route::get('{id}/edit', 'BookController@edit')->name('books.edit');
    route::get('{id}/delete', 'BookController@destroy')->name('book.delete');

    route::post('/store', 'BookController@store')->name('books.store');
    route::post('/update', 'BookController@update')->name('books.update');
});

// TODO: Users pages
Route::group(['prefix' => 'users'], function () {
    route::get('/', 'UserController@index')->name('users');
    route::get('/create', 'UserController@create')->name('users.create');
    route::get('/{id}/edit', 'UserController@edit')->name('users.edit');
    route::get('/{id}/delete', 'UserController@destroy')->name('users.delete');

    route::post('/store', 'UserController@store')->name('users.store');
    route::post('/update', 'UserController@update')->name('users.update');

});

// TODO: Cetak kartu anggota pages
Route::group(['prefix' => 'cetakkartuanggota'], function () {
    route::get('/', 'CetakKartuAnggotaController@index')->name('CetakKartuAnggota.index');
    route::get('{id}/pdf', 'CetakKartuAnggotaController@exportPDF')->name('CetakKartuAnggota.pdf');
    route::get('{id}/detail', 'CetakKartuAnggotaController@detail')->name('CetakKartuAnggota.detail');

    route::get('/store', 'CetakKartuAnggotaController@store')->name('CetakKartuAnggota.store');
});

// TODO: Category page
Route::group(['prefix' => 'category'], function () {
    route::get('/', 'CategoryController@create')->name('category.create');
    route::get('/{id}/edit', 'CategoryController@edit')->name('category.edit');
    route::get('/{id}/delete', 'CategoryController@destroy')->name('category.create');

    route::post('/store', 'CategoryController@store')->name('category.store');
    route::post('/update', 'CategoryController@update')->name('category.update');

});

// TODO: Pengembalian page
Route::group(['prefix' => 'pengembalian'], function () {
    route::get('/', 'PengembalianController@index')->name('pengembalian.index');
    route::get('/laporan', 'PengembalianController@laporan')->name('pengembalian.laporan');
});

// TODO: Pengembalian page
Route::group(['prefix' => 'buat-pengembalian'], function () {
    route::get('/', 'BuatPengembalianController@index')->name('buat-pengembalian.index');
});

// TODO: Peminjaman page
Route::group(['prefix' => 'peminjaman'], function () {
    route::get('/', 'PeminjamanController@index')->name('peminjaman.index');
    route::get('/pinjam', 'PeminjamanController@create')->name('peminjaman.pinjam');

    route::post('/pinjam/store', 'PeminjamanController@store')->name('peminjaman.store');
});
