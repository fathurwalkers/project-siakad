<?php

use Illuminate\Support\Facades\Route;

// PUBLIC ROUTE 
Route::get('/beranda', 'HomeController@home');

// ADMIN ROUTE 
Route::get('/admin/login', 'AdminController@login');
Route::get('/admin/daftar', 'AdminController@daftar');
Route::get('/admin/beranda', 'AdminController@beranda');

// USER ROUTE 
Route::get('/user/login', 'PenggunaController@login');
Route::get('/user/beranda', 'PenggunaController@beranda');
