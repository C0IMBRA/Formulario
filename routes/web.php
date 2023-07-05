<?php

use Illuminate\Support\Facades\Route;

// sempre seguir a padrão abaixo

Route::get('/clientes', app()->getNamespace() . 'Http\Controllers\ClientesController@index')->name('clientes.index');
Route::get('/clientes/cadastrar', app()->getNamespace() . 'Http\Controllers\ClientesController@cadastrar')->name('clientes.cadastrar');
Route::get('/clientes/editar', app()->getNamespace() . 'Http\Controllers\ClientesController@editar')->name('clientes.editar');
Route::get('/clientes/deletar', app()->getNamespace() . 'Http\Controllers\ClientesController@deletar')->name('clientes.deletar');
Route::get('/clientes/visualizar', app()->getNamespace() . 'Http\Controllers\ClientesController@visualizar')->name('clientes.visualizar');




