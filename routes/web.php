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

Route::get('/index', function () {
    return view('index');
});
Route::get('/', function () {
    return view('index',['nombre'=>'andres']);
});
Route::get('/proyecto', function () {
    return view('layouts.proyecto');
});
Route::get('/nosotros', function () {
    return view('layouts.nosotros');
});
Route::get('/publicaciones', function () {
    return view('layouts.publicaciones');
});
Route::get('/aliados', function () {
    return view('layouts.aliados');
});

Route::get('/contacto', function () {
    return view('layouts.contacto');
});

Route::get('/publicacion', function () {
    return view('layouts.publicacion');
});
