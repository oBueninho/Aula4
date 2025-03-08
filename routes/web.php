<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/contato', ['uses'=>'App\Http\Controllers\ContatoController@index']);
