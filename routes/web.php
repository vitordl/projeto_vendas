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
//     return view('welcome');
// });


Route::get('/', 'Controlador@index')->name('inicio');

Route::post('acesso', 'Controlador@acessar')->name('acesso');

Route::get('sistema', 'Controlador@sistema')->name('sistema');

Route::get('salvar/{id?}', 'Controlador@store')->name('store');

// Route::get('lista', 'Controlador@lista')->name('lista');

Route::get('lista', 'Controlador@lista')->name('lista');

Route::get('limpar', 'Controlador@limparTudo')->name('limpar_tudo');

Route::get('remover/{id?}', 'Controlador@remover')->name('remover');

Route::get('relatorio', 'Controlador@relatorio')->name('relatorio');

// Route::get('lista', 'Controlador@store')->name('lista_produtos_adicionados');

// Route::get('lista', 'Controlador@listaAdd')->name('lista_produtos_adicionados');


