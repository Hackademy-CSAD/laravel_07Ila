<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/animals/create',[AnimalsController::class,'create'])->name('animals.create');
Route::post('/animals/store',[AnimalsController::class, 'store'])->name('animals.create');
// rotta post che si prende i dati in carico e li porta nel DB
Route::get('/',[AnimalController::class,'index'])->name('animals.create');