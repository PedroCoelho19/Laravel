<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return "Hello World";
// });

Route::get('/', 'PrincipalController@Principal');

Route::get('/sobre-nos', 'SobreNosController@Principal');

Route::get('/contato', 'ContatoController@Principal');

Route::get('/contato/{nome}', function(string $nome){
    echo 'Estamos aqui '.$nome;
});