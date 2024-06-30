<?php

use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'Create']);
Route::get('/events/enter', [EventController::class, 'enter']);
Route::get('/events/contacts', [EventController::class, 'contacts']);
Route::get('/events/resgister', [EventController::class, 'resgister']);

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/produtos', function () {

    $busca = request('search');

    return view('products', ['busca' => $busca]);
});

Route::get('/produtos_teste/{id?}', function ($id = null) {
    return view('product', ['id' => $id]);
});
