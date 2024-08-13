<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $nome = "Luiz";
    $lista = [10, 20, 30, 40, 50];
    return view('welcome', ['nome' => $nome, 'lista' => $lista]);
});

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/produtos', function () {
    $busca = request('search');
    return view('produtos', ['busca' => $busca]);
});

Route::get('/produtos/{id}', function ($id) {
    return view('produto', ['id' => $id]);
});
