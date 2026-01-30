<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentaireController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecetteController;
use App\Http\Controllers\UserController;

Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});



Route::get('/', [RecetteController::class, 'statistique'])->name('home');
Route::post('/', [RecetteController::class, 'search'])->name('search');

Route::get('/recettes', [RecetteController::class, 'index'])->name('recettes');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/recettes/gerer', [UserController::class, 'index'])->name('recettes.gerer');

Route::get('/recettes/create', [RecetteController::class, 'create']);
Route::post('/recettes/store', [RecetteController::class, 'store']);
Route::get('/recettes/{id}', [RecetteController::class, 'show']);
Route::delete('/recettes/{id}', [RecetteController::class, 'destroy']);
Route::put('/recettes/edit/{id}', [RecetteController::class, 'edit']);
Route::post('/recettes/{id}/comment/store', [CommentaireController::class, 'store']);
Route::put('/recettes/{id}/comment/update/{id}', [CommentaireController::class, 'update']);
Route::delete('/recettes/{id}/comment/destroy/{id}', [CommentaireController::class, 'destroy']);
