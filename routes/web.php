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
Route::get('/pizzas', function () {
    return view('pizzas');
});
Route::get('/pizzas-details', function () {
    $pizzas = [
        ['type' => 'hawaiian', 'base' => 'cheesy crust'],
        ['type' => 'volcano', 'base' => 'garlic crust'],
        ['type' => 'veg supreme', 'base' => 'thin & crispy']
    ];
    return view('pizzas', ['pizzas' => $pizzas]);
});
Route::get('/get-json-object', function () {
    return ['user_first_name' => 'fist name', 'user_last_name' => 'last name', 'user_name' => 'user name', 'user_email' => 'user@email.com'];
});
