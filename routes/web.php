<?php

use Illuminate\Support\Facades\Route;

// sempre seguir a padrão abaixo

Route::get('/clientes', app()->getNamespace() . 'Http\Controllers\ClientesController@index')->name('clientes.index');
Route::get('/clientes/adicionar', app()->getNamespace() . 'Http\Controllers\ClientesController@adicionar')->name('clientes.adicionar');
Route::get('/clientes/editar/{id}', app()->getNamespace() . 'Http\Controllers\ClientesController@editar')->name('clientes.editar');
Route::get('/clientes/deletar/{id}', app()->getNamespace() . 'Http\Controllers\ClientesController@deletar')->name('clientes.deletar');
Route::get('/clientes/visualizar/{id}', app()->getNamespace() . 'Http\Controllers\ClientesController@visualizar')->name('clientes.visualizar');

Route::post('/clientes/editar/{id}', app()->getNamespace() . 'Http\Controllers\ClientesController@editar');
Route::post('/clientes/adicionar', app()->getNamespace() . 'Http\Controllers\ClientesController@adicionar');










