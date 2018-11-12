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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/obtenerMunicipios/{departamento}', 'CommonController@obtenerMunicipios');
Route::post('/validarDUI','UserRegisterController@validarDUI');

// registro de perfil de aplicantes
Route::get('/registro', 'UserRegisterController@index');
Route::post('/registrarUsuario','UserRegisterController@registrarUsuario');
Route::post('/agregarEstudios/{id}','UserRegisterController@agregarEstudios');
Route::post('/agregarIdiomas/{id}', 'UserRegisterController@agregarIdiomas');
Route::post('/agregarProgramas/{id}', 'UserRegisterController@agregarProgramas');
Route::post('/agregarExperiencias/{id}', 'UserRegisterController@agregarExperiencias');

// registro de perfil de empresas
Route::get('/registroEmpresa', 'EmpresaRegisterController@index');
Route::post('/registroEmpresa', 'EmpresaRegisterController@CrearEmpresa');