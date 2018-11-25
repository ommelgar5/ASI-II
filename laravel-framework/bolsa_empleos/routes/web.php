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
    Route::post('/nueva_oferta','Auth\EmpresaController@creaOferta')->name('crearOferta');
});
// fin

/*
	para el gestor(Admin)
*/
Route::prefix('gestor')->group(function(){
	Route::get('/dashboard','GestorController@index')->name('gestor.dashboard')->middleware('auth','gestor');
	Route::get('/perfil','GestorController@perfil')->name('gestor.perfil')->middleware('auth','gestor');
	Route::get('/editPerfil','GestorController@editPerfil')->name('gestor.editPerfil')->middleware('auth','gestor');
	Route::put('/updatePerfil','GestorController@updatePerfil')->name('gestor.updatePerfil')->middleware('auth','gestor');
	Route::get('/createPerfil','GestorController@createPerfil')->name('gestor.createPerfil')->middleware('auth','gestor');
//	Route::post('/createPerfil','GestorController@storePerfil')->name('gestor.storePerfil')->middleware('auth','gestor');

	Route::get('/empresas','GestorController@empresas')->name('gestor.empresas')->middleware('auth','gestor');
	Route::get('/empresa/{id}','GestorController@empresa')->name('gestor.empresa')->middleware('auth','gestor');
	Route::post('/empDet/{id}','GestorController@empDet')->name('gestor.empDet')->middleware('auth','gestor');

	Route::get('/usuarios','GestorController@usuarios')->name('gestor.usuarios')->middleware('auth','gestor');
	Route::get('/usuario/{id}','GestorController@usuario')->name('gestor.usuario')->middleware('auth','gestor');
	Route::post('/useDet/{id}','GestorController@useDet')->name('gestor.useDet')->middleware('auth','gestor');

    Route::get('/usuarios','GestorController@usuarios')->name('gestor.usuarios')->middleware('auth','gestor');
    Route::get('/usuario/{id}','GestorController@usuario')->name('gestor.usuario')->middleware('auth','gestor');
    Route::post('/useDet/{id}','GestorController@useDet')->name('gestor.useDet')->middleware('auth','gestor');

    Route::get('/usuarios/registrados/dia','GestorController@usuariosDia')->name('gestor.usuarios.dia')->middleware('auth','gestor');
    Route::get('/usuarios/registrados/mes','GestorController@usuariosMes')->name('gestor.usuarios.mes')->middleware('auth','gestor');

    Route::get('/empresas/registradas/dia','GestorController@empresasDia')->name('gestor.empresas.dia')->middleware('auth','gestor');
    Route::get('/empresas/registradas/mes','GestorController@empresasMes')->name('gestor.empresas.mes')->middleware('auth','gestor');
});
//fin


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
Route::get('perfil','editUserController@perfil');

//<<<<<<< HEAD

/* 
	Editar Empresa
*/
Route::resource('editPerfilEmpresa','editEmpresaController');
Route::resource('editOferta','ManttoEmpresa\OfertaEmpresaController');

/*
 *      Mostrar y Editar Oferta
 * */
Route::resource('editDetalle','ManttoEmpresa\DetalleController');
Route::resource('editExperienciaEmp','ManttoEmpresa\ExperienciaController');
Route::get('/editExper/{id}','ManttoEmpresa\ExperienciaController@index');
Route::get('/editExper/create/{id}','ManttoEmpresa\ExperienciaController@create');
Route::resource('editEstudioEmp','ManttoEmpresa\EstudioController');
Route::get('/editEst/{id}','ManttoEmpresa\EstudioController@index');
Route::get('/editEst/create/{id}','ManttoEmpresa\EstudioController@create');
Route::resource('editHabilidadEmp','ManttoEmpresa\HabilidadController');
Route::get('/editHab/{id}','ManttoEmpresa\HabilidadController@index');
Route::get('/editHab/create/{id}','ManttoEmpresa\HabilidadController@create');
Route::resource('editIdiomaEmp','ManttoEmpresa\IdiomaController');
Route::get('/editIdi/{id}','ManttoEmpresa\IdiomaController@index');
Route::get('/editIdi/create/{id}','ManttoEmpresa\IdiomaController@create');


/*
	Gestion de oferta - usuario
*/
Route::get('/gestion','gestionOfertaAplicanteController@index')->name('gestion')->middleware('auth');


/*
 * MANTTO TABLAS
 *
 * */

Route::resource('areaEmpresa','ManttoGestor\AreaEmpresaController');
Route::resource('areaEstudio','ManttoGestor\AreaEstudioController');
Route::resource('aExperiencia','ManttoGestor\YearExperienciaController');
Route::resource('departamento','ManttoGestor\DepartamentoController');
Route::resource('estadoCivil','ManttoGestor\EstadoCivilController');
Route::resource('genero','ManttoGestor\GeneroController');
Route::resource('giroEmpresa','ManttoGestor\GiroEmpresaController');
Route::resource('idioma','ManttoGestor\IdiomaController');
Route::resource('tipoLicencia','ManttoGestor\TipoLicenciaController');
Route::resource('nivel','ManttoGestor\NivelController');
Route::resource('programa','ManttoGestor\ProgramaController');
Route::resource('tipoContrato','ManttoGestor\TipoContratoController');
Route::resource('municipio','ManttoGestor\MunicipioController');
Route::post('deleteMunicipio','ManttoGestor\MunicipioController@delete');

