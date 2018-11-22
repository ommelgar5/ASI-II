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

/*
	se ve para los logueados y no logueados
*/
Route::get('/', 'OfertasController@inicio')->name('inicio');

Route::get('/contactanos',function(){
	return view('contactanos');
})->name('contactanos');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

/*

	funciones comunes

*/
Route::get('/obtenerMunicipios/{departamento}', 'CommonController@obtenerMunicipios');
Route::post('/validarDUI','UserRegisterController@validarDUI');
// fin

/* 
	ver ofertas de una categoria
*/
Route::get('/ofertas/{area?}','OfertasController@ofertasArea')->name('ofertas');
/*
	ver detalle de la oferta
*/
Route::get('/oferta/{id}','OfertasController@ofertaDetalle')->name('oferta');
/*
	aplicar a una oferta
*/
Route::get('/aplicarOferta/{id}','OfertasController@aplicarOferta')->name('aplicar')->middleware('auth');


/*

	registro de perfil de empresas

*/
Route::get('/registroEmpresa', 'EmpresaRegisterController@index')->middleware('guest');
Route::post('/registroEmpresa', 'EmpresaRegisterController@CrearEmpresa');

Route::prefix('empresa')->group(function() {
    Route::get('/login', 'Auth\EmpresaLoginController@showLoginForm')->name('empresa.login')->middleware('guest');
    Route::post('/login', 'Auth\EmpresaLoginController@login')->name('empresa.login.submit');
    Route::get('/dashboard', 'Auth\EmpresaController@index')->name('empresa.dashboard');
    Route::get('/nueva_oferta','Auth\EmpresaController@showNuevaOferta')->name('empresa.nuevaoferta');
});

// fin

/*
	registro de aplicantes 
*/
Route::get('/registro', 'UserRegisterController@index')->middleware('guest');
Route::post('/registrarUsuario','UserRegisterController@registrarUsuario');
Route::post('/agregarEstudios/{id}','UserRegisterController@agregarEstudios');
Route::post('/agregarIdiomas/{id}', 'UserRegisterController@agregarIdiomas');
Route::post('/agregarProgramas/{id}', 'UserRegisterController@agregarProgramas');
Route::post('/agregarExperiencias/{id}', 'UserRegisterController@agregarExperiencias');

// fin

/*
 *
 *  Editar perfil usuario
 *
 */
Route::resource('editPerfil','editUserController');
Route::resource('editExperiencia','ManttoUser\ExperienciaUserController');
Route::resource('editEstudio','ManttoUser\EstudiosUserController');
Route::resource('editHabilidad','ManttoUser\HabilidadUserController');
Route::resource('editIdioma','ManttoUser\IdiomaUserController');

/*
	Gestion de oferta - usuario
*/
Route::get('/gestion','gestionOfertaAplicanteController@index')->name('gestion')->middleware('auth');