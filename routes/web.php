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

Auth::routes();

// TODO: welcome page
Route::get('/', function () {
    return view('welcome');
});

// TODO: home page
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/category', 'HomeController@category')->name('home.category');

// TODO: Book pages
Route::prefix('book')->middleware('auth')->group( function () {
    route::get('/', 'BookController@index')->name('book');
    route::get('/create', 'BookController@create')->name('book.create');
    route::get('/{id}/edit', 'BookController@edit')->name('book.edit');
    route::get('/{id}/delete', 'BookController@destroy')->name('book.delete');
    route::get('/search', 'BookController@search')->name('book.search');

    route::post('/store', 'BookController@store')->name('book.store');
    route::post('/update', 'BookController@update')->name('book.update');
});

// TODO: Users pages
Route::prefix('user')->middleware('auth')->group( function () {
    route::get('/', 'UserController@index')->name('users');
    route::middleware('role:admin')->get('/create', 'UserController@create')->name('users.create');
    route::get('/search', 'UserController@search')->name('users.search');
    route::middleware('role:admin')->get('/{id}/edit', 'UserController@edit')->name('users.edit');
    route::middleware('role:admin')->get('/{id}/delete', 'UserController@destroy')->name('users.delete');

    route::post('/store', 'UserController@store')->name('users.store');
    route::post('/update', 'UserController@update')->name('users.update');
});

// TODO: Cetak kartu anggota pages
Route::prefix('cetakkartuanggota')->middleware('auth')->group( function () {
    route::get('/', 'CetakKartuAnggotaController@index')->name('CetakKartuAnggota.index');
    route::get('/{id}/pdf', 'CetakKartuAnggotaController@exportPDF')->name('CetakKartuAnggota.pdf');
    route::get('/{id}/detail', 'CetakKartuAnggotaController@detail')->name('CetakKartuAnggota.detail');

    route::get('/store', 'CetakKartuAnggotaController@store')->name('CetakKartuAnggota.store');
});

// TODO: Category page
Route::prefix('category')->middleware('auth')->group( function () {
    route::get('/', 'CategoryController@create')->name('category.create');
    route::get('/{id}/edit', 'CategoryController@edit')->name('category.edit');
    route::get('/{id}/delete', 'CategoryController@destroy')->name('category.delete');

    route::post('/store', 'CategoryController@store')->name('category.store');
    route::post('/update', 'CategoryController@update')->name('category.update');
});

// TODO: Peminjaman page
Route::prefix('peminjaman')->middleware('auth')->group( function () {
    route::get('/', 'PeminjamanController@index')->name('peminjaman');
    route::get('/search', 'PeminjamanController@search')->name('peminjaman.search');
    route::get('/pinjam', 'PeminjamanController@create')->name('peminjaman.pinjam');
    route::get('/pinjam/search', 'PeminjamanController@bookSearch')->name('peminjaman.book.search');
    route::get('/{id}/kembalikan', 'PeminjamanController@destroy')->name('peminjaman.delete');

    route::post('/pinjam/store', 'PeminjamanController@store')->name('peminjaman.store');
});

