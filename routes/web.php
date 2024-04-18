<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/animals/create',[AnimalController::class,'create'])->name('animals.create');
Route::post('/animals/store',[AnimalController::class, 'store'])->name('animals.create');
// rotta post che si prende i dati in carico e li porta nel DB
Route::get('/',[AnimalController::class,'index'])->name('animals.create');
Route::post('/animals/{animal}/detail',[AnimalController::class, 'show'])-> name('animals.show');