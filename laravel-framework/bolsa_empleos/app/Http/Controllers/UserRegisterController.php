<?php

namespace App\Http\Controllers;

use App\User;
use App\idioma_solicitante;
use App\programa_solicitante;
use App\idioma;
use App\programa;
use App\nivel;
use App\persona;
use App\licencia;
use App\estadocivil;
use App\a_experiencia;
use App\genero;
use App\departamento;
use App\municipio;
use App\estudio;
use App\area_estudio;
use App\nivel_estudio;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserRegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }


    public function index(){
        // $licencias = App\licencia::all();
        // $estadosCivil = App\estadocivil::all();
        // $a_experiencia = App\a_experiencia::all();
        // $generos = App\genero::all();

        $data = array(
            'licencias' => licencia::where('isActive',1)->get(),
            'estadoCivil' => estadocivil::where('isActive',1)->get(),
            'a_experiencia' => a_experiencia::all(),
            'generos' => genero::where('isActive',1)->get(),
            'departamentos' => departamento::where('isActive',1)->get(),
            'municipios' => municipio::where('isActive',1)->get(),
            'areasEstudio' => area_estudio::where('isActive',1)->get(),
            'nivelesEstudio' => nivel_estudio::where('isActive',1)->get(),
            'idiomas' => idioma::where('isActive',1)->get(),
            'niveles' => nivel::where('isActive',1)->get(),
            'programas' => programa::where('isActive',1)->get()
        );

        return view('auth.userRegister', [ 'data' => $data ]);
    }


    public function validarDUI(Request $request){
        $dui = $request->input('dui');
        $existe = User::where('dui', $dui )->exists();

        $response['error'] = $existe;
        if ($existe){
            $response['errorMessage'] = 'El usuario ya existe.';
        }

        return response()->json($response);
    }

    public function registrarUsuario(Request $request){
        
        $response = array();
        $response['error'] = false;

        // DB::beginTransaction();
        // try {
        //     $persona = new Persona;
        //     $persona->cod_tipo_usuario = 2;
        //     $persona->dui = $request->input('dui');
        //     $persona->nombre = $request->input('nombres');
        //     $persona->apellido = $request->input('apellidos');
        //     $persona->cod_genero = $request->input('genero');
        //     $persona->fech_nac = $request->input('fechaNac');
        //     $persona->telefono1 = $request->input('telFijo');
        //     $persona->telefono2 = $request->input('telMovil');
        //     $persona->cod_civil = $request->input('estadoCivil');
        //     $persona->cod_a_experiencia = $request->input('a_experiencia');
        //     $persona->vehiculo = 0;//$request->input('');
        //     $persona->cod_licencia = $request->input('licencia');
        //     $persona->correo = $request->input('userEmail');

        //     $success = $persona->save();
        //     if($success){
        //         $login = new User;
        //         $login->dui = $request->input('dui');
        //         $login->password = Hash::make($request->input('pass'));
        //         $success = $login->save();
        //         if($success){
        //             DB::commit(); 
        //             $response['personaID'] = $persona->id;   
        //         }else{
        //             DB::rollback();
        //         }
        //     }else{
        //         DB::rollback();
        //     }
            
        // } catch (\Exception $e) {
        //     $success = false;
        //     DB::rollback();
        // }
        
        // $response['error'] = !$success;

        return response()->json($response);
    }

    public function agregarEstudios($id, Request $request){

        $response = array();
        $response['error'] = false;

        // $areasEstudio = $request->input('miAreaEstudio');
        // $nivelesEstudio = $request->input('miNivelEstudio');
        // $instituciones = $request->input('miInstitucion');
        // $especialidad = $request->input('miCarrera');
        // $fechasInicio = $request->input('miFechaInicio');
        // $fechasFin = $request->input('miFechaFin');
        // $actuales = $request->input('miEstudioActual');

        // for ($i=0; $i < count($areasEstudio) ; $i++) { 
        //     $estudio = new estudio;

        //     $estudio->cod_nivel_est = $nivelesEstudio[$i];
        //     $estudio->cod_area_est = $areasEstudio[$i];
        //     $estudio->especialidad = $especialidad[$i];
        //     $estudio->a_inicio = date("Y", strtotime($fechasInicio[$i]) );
        //     $estudio->a_fin =  date("Y", strtotime($fechasFin[$i]) );
        //     $estudio->actual = ( $actuales[$i] == "true" ? 1:0 );
        //     $estudio->persona_id = $id;
        //     $estudio->nombre_institucion = $instituciones[$i];
            
        //     $resultado = $estudio->save();
        // }

        //     $response['error'] = !$resultado;

        return response()->json($response);
    }

    public function agregarIdiomas($id, Request $request){
        $response = array();
        $response['error'] = false;

        // $idiomas = $request->input('idiomas');
        // $niveles = $request->input('niveles');

        // for ($i=0; $i < count($idiomas); $i++) { 
        //     $idioma_solicitante = new idioma_solicitante;

        //     $idioma_solicitante->persona_id = $id;
        //     $idioma_solicitante->cod_idioma = $idiomas[$i];
        //     $idioma_solicitante->cod_nivel = $niveles[$i];
        //     $resultado = $idioma_solicitante->save();
        // }
        //     $response['error'] = !$resultado;
            return response()->json($response);
    }

    public function agregarProgramas($id, Request $request){
        $response = array();
        $response['error'] = false;

        $programas = $request->input('programas');
        $niveles = $request->input('nivelesP');

        for ($i=0; $i < count($programas); $i++) { 
            $programa_solicitante = new programa_solicitante;

            $programa_solicitante->persona_id = $id;
            $programa_solicitante->cod_programa = $programas[$i];
            $programa_solicitante->cod_nivel = $niveles[$i];
            $resultado = $programa_solicitante->save();
        }
            $response['error'] = !$resultado;
            return response()->json($response);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:usuarios',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
