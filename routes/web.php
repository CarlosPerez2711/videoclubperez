<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('inicio'); 

Route::get('/login', function () {
    return view('auth.login');
})->name('login');  

Route::post('/logout', function () {
    return redirect()->route('inicio');
})->name('logout');  

Route::get('/catalog', function () {
    return view('catalog.index');
})->name('catalog');  

Route::get('/catalog/show/{id}', function ($id) {
    return view('catalog.show', ['id' => $id]);
})->name('catalog.show');  

Route::get('/catalog/create', function () {
    return view('catalog.create');
})->name('catalog.create');  

Route::get('/catalog/edit/{id}', function ($id) {
    return view('catalog.edit', ['id' => $id]);
})->name('catalog.edit');  
?>
