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
    return view('welcome');
});


Route::get('/create_product', function(){
    return view('create_product');
});

Route::get('/update_product', function(){
    return view('update_product');
});

Route::get('/update_product', function(){
    return view('update_product');
});

Route::get('/create_user', function(){
    return view('create_user');
});
Route::get('/create_user', function(){
    return view('create_user');
});
