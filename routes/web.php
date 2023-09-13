<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;


/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', [AnimalController::class, 'index'])-> name('animal.index');


Route::get('/login', [AnimalController::class, 'login'])-> name('login');

Route::get('/form', [AnimalController::class, 'form'])-> name('form');

Route::get('/main', [AnimalController::class, 'main'])-> name('main');

Route::get('/list', [AnimalController::class, 'list'])-> name('list');