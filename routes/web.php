<?php

use Illuminate\Support\Facades\Route;

// PUBLIC ROUTE 
Route::fallback(function () {
    return view('errorpage');
});
Route::get('/', 'HomesController@homes');
Route::get('/cek/{token}', 'HomesController@cek');

// ADMIN ROUTE 
Route::get('/lupa-password', 'AdminController@lupapassword');
Route::get('/lupa-password/reset', 'AdminController@resetpassword');
Route::post('/lupa-password/reset', 'AdminController@gantipassword');
Route::post('/lupa-password', 'AdminController@postLupapassword');
Route::get('/lupa-password/validasi_password/{cekk}/{cektokenn}', 'AdminController@getvalidasiPassword');

Route::get('/admin/login', 'AdminController@login');
Route::post('/admin/login', 'AdminController@ceklogin');
Route::get('/admin/daftar', 'AdminController@daftar');
Route::post('/admin/daftar', 'AdminController@postdaftar');
Route::get('/admin/validasi/{cek}/{cektoken}', 'AdminController@validasi');
Route::get('/admin', 'AdminController@beranda');
Route::get('/default', 'AdminController@alert');
Route::post('/admin/keluar', 'AdminController@keluar');

// USER ROUTE 
Route::get('/user', 'AdminController@berandauser');
Route::get('/user/login', 'PenggunaController@login');
Route::get('/user/beranda', 'PenggunaController@beranda');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/logout', 'HomeController@logout')->name('logout');
