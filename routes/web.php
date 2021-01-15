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
    return view('layouts.home');
})->name('home');

 Route::get('trayectoria', function () {
     return view('layouts.trayectoria');
})->name('trayectoria');

Route::get('servicios', function(){
    return view('layouts.servicios');
})->name('servicios');


Route::get('empresarios', function(){
    return view('layouts.empresarios');
})->name('empresarios');


Route::get('comunidad', function(){
    return view('layouts.comunidad');
})->name('comunidad');

