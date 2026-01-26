<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/recette', function () {
    return view('recette');
});

Route::get('/add', function () {
    return view('add');
});

route::get('/favoris', function () {
    return view('favoris');
});

route::get('/gerer', function () {
    return view('gerer');
});

route::get('/edit', function () {
    return view('edit');
});

Route::get('/error', function () {
    return view('error');
});

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);