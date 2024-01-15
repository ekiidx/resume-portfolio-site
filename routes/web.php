<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/projects', function () {
    return view('projects/index');
});
Route::get('/projects/{$id}', function () {
    return view('projects/show');
});
Route::get('/tags', function () {
    return view('tags/index');
});
Route::get('/tags/{$id}', function () {
    return view('tags/index');
});