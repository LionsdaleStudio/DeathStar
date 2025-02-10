<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StormtrooperController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* Controllerben a funkció: index, create és store, show, edit és update, destroy */
/* Alap CRUD műveletek CreateReadUpdateDelete */
Route::resource('/stormtroopers', StormtrooperController::class );
