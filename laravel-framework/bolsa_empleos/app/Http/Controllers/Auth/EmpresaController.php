<?php

namespace App\Http\Controllers\Auth;

use App\a_experiencia;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class EmpresaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:empresa');
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/empresa/dashboard';

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('empresa.dashboard');
    }

    public function showNuevaOferta(){
        // $data = array(
        //     'licencias' => licencia::where('isActive',1)->get(),
        //     'estadoCivil' => estadocivil::where('isActive',1)->get(),
        //     'a_experiencia' => a_experiencia::all(),
        //     'generos' => genero::where('isActive',1)->get(),
        //     'departamentos' => departamento::where('isActive',1)->get(),
        //     'municipios' => municipio::where('isActive',1)->get(),
        //     'areasEstudio' => area_estudio::where('isActive',1)->get(),
        //     'nivelesEstudio' => nivel_estudio::where('isActive',1)->get(),
        //     'idiomas' => idioma::where('isActive',1)->get(),
        //     'niveles' => nivel::where('isActive',1)->get(),
        //     'programas' => programa::where('isActive',1)->get(),
        //     'areas_empresa' => area_empresa::where('isActive',1)->get(),
        //     'cargos_empresa' => cargo_empresa::where('isActive',1)->get(),
        //     'giros_empresa' => giro_empresa::where('isActive',1)->get()
        // );
        return view('empresa.nuevaOferta');
    }

}
