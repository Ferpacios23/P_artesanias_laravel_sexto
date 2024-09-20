<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('index');});

Route::get('/contacto', function () {return view('site/contacto');});

Route::get('/login', function () {return view('site/login');});

Route::get('/tienda', function () {return view('site/tienda');});

Route::get('/nosotros', function () {return view('site/nosotros');});