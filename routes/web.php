<?php

use Illuminate\Support\Facades\Route;

// PUBLIC ROUTE 
Route::get('/homes', 'HomesController@home');
Route::get('/cek', 'HomesController@cek');

// ADMIN ROUTE 
// Route::get('/admin/login', 'AdminController@login');
// Route::post('/admin/login', 'AdminController@ceklogin');
// Route::get('/admin/daftar', 'AdminController@daftar');
// Route::post('/admin/daftar', 'AdminController@postdaftar');
// Route::get('/admin/validasi', 'AdminController@validasi');
// Route::get('/admin/beranda', 'AdminController@beranda');
// Route::get('/default', 'AdminController@alert');
// Route::get('/admin/logout', 'AdminController@logout');

// USER ROUTE 
Route::get('/user/login', 'PenggunaController@login');
Route::get('/user/beranda', 'PenggunaController@beranda');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/logout', 'HomeController@logout')->name('logout');
