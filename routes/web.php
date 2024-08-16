<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);

Route::get('/events/create', [EventController::class, 'create']);

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
