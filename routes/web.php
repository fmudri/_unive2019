<?php

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

Route::get('/w/', function () {
    return "hello ja sam prva GET ruta!";
});

Route::get('/pozdrav/{ime}', function () {
    return "dobrodoslaa ".$ime;
});
Route::get('/probna/','probniController@probnaFunkcija');

Route::redirect('/here', '/there');

Route::get('/there', function () {
    return "hello ja sam redirektirana ruta!";
});