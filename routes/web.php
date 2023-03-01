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

Route::get('/post', [HomeController::class, 'index']);

Route::get('/post/update', [HomeController::class, 'update']);

Route::delete('/post/destroy', [HomeController::class, 'destroy']);
