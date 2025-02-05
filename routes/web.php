<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/* Controllerben a funkció: index, create és store, show, edit és update, destroy */
/* Alap CRUD műveletek CreateReadUpdateDelete */
Route::resource('/stormtroopers', StormtrooperController::class );
