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
    return view('welcome');
});
Route::get('/admin', function () {
    return view('layout.admin');
});

Route::get('/dashboard', function () {
    return view('layout.dashboard');
});

Route::get('/index', function () {
    return view('viatura.index');
});

Route::get('/create', function () {
    return view('viatura.create');
});
Route::get('/create_entidade', function () {
    return view('entidade.create');
});

Route::get('/create_cartao', function () {
    return view('cartao.create');
});
