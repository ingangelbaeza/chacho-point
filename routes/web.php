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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/productos', \App\Http\Livewire\Product\Read::class)->name('product.read');
    Route::get('/productos-crear', \App\Http\Livewire\Product\Create::class)->name('product.create');
    Route::get('/productos-editar/{slug}', \App\Http\Livewire\Product\Update::class)->name('product.update');
});
