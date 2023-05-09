<?php

use Illuminate\Support\Facades\Route;

Route::resource('carro', CarroController::class);
Route::resource('cartao', CartaoController::class);
Route::resource('entidade', EntidadeController::class);
Route::resource('utente', UtenteController::class);
Route::resource('entrada', EntradaaidaController::class);


Route::get('/admin2', function () {
    return view('layout.admin2');
});
Route::get('/dashboard2', function () {
    return view('layout.dashboard2');
});
Route::get('/', function () {
    return view('welcome');
});


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
