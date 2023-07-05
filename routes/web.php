<?php

use Illuminate\Support\Facades\Route;

// sempre seguir a padrão abaixo

Route::get('/clientes', app()->getNamespace() . 'Http\Controllers\ClientesController@index')->name('clientes.index');
Route::get('/clientes/cadastrar', app()->getNamespace() . 'Http\Controllers\ClientesController@cadastrar')->name('clientes.cadastrar');



