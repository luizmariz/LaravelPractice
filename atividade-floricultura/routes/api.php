<?php

use Illuminate\Http\Request;

Route::delete('/deletarProduto/{id}', 'MinhaController@deletarProduto');
Route::post('/criarProduto', 'MinhaController@criarProduto');
Route::get('/getProduto/{id}', 'MinhaController@getProduto');
Route::put('/atualizarProduto/{id}','MinhaController@atualizarProduto');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
