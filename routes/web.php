<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('sarah/{id}', function ($id) {
    return 'Welcome to the website, id: ' . $id;
  });