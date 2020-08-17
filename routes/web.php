<?php

use Illuminate\Support\Facades\Route;

// PUBLIC ROUTE 
Route::get('/', 'HomeController@home');

// ADMIN ROUTE 
Route::get('/admin/login', 'AdminController@login');
Route::post('/admin/proseslogin', 'AdminController@ceklogin');
Route::get('/admin/daftar', 'AdminController@daftar');
Route::get('/admin/beranda', 'AdminController@beranda');
Route::get('/default', 'AdminController@alert');

// USER ROUTE 
Route::get('/user/login', 'PenggunaController@login');
Route::get('/user/beranda', 'PenggunaController@beranda');
