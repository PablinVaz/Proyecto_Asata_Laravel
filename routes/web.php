<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

Route::get('/alquileres', function () {
    return view('alquileres');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/faqs', function () {
    return view('faqs');
});

Route::get('/galeria', function () {
    return view('galeria');
});

Route::get('/noticias', function () {
    return view('noticias');
});

Route::get('/noticia1', function () {
    return view('noticia1');
});

Route::get('/noticia2', function () {
    return view('noticia2');
});

Route::get('/nuestras_casas', function () {
    return view('nuestras_casas');
});

Route::get('/servicios', function () {
    return view('servicios');
});
