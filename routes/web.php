<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('clientes', '\App\Http\Controllers\ClienteController');
Route::name('print')->get('/imprimir', '\App\Http\Controllers\GeneradorController@imprimir');
