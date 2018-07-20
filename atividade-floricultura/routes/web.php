<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('servicos/{nome}/{cpf}/{rg}/{cep}', function ($nome,$cpf,$rg,$cep) {
    return nl2br("nome: ".$nome."  \n cpf: ".$cpf." \n rg: ".$rg." \n cep: ".$cep." ");

});
