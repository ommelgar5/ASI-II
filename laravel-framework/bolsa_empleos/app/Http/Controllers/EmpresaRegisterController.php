<?php

namespace App\Http\Controllers;

use App\giro_empresa;
use App\departamento;
use App\municipio;
use App\empresa;
use App\direccion_empresa;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class EmpresaRegisterController extends Controller
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

    // use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    // protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }


    public function index()
    {
        // $licencias = App\licencia::all();
        // $estadosCivil = App\estadocivil::all();
        // $a_experiencia = App\a_experiencia::all();
        // $generos = App\genero::all();

        $data = array(
            'departamentos' => departamento::where('isActive',1)->get(),
            'municipios' => municipio::where('isActive',1)->get(),
            'giros_empresa' => giro_empresa::where('isActive',1)->get()
        );

        return view('empresa.crearPerfilEmpresa', [ 'data' => $data ]);
    }

    

    public function CrearEmpresa(Request $request)
    {
        $response = array();
        $response['error'] = false;
        $success = 0; 
        $juridico = $request->input('juridico');
        $comercial = $request->input('comercial');
        $nit = $request->input('nit');
        $giro = $request->input('giro');
        $email = $request->input('email');
        $password = $request->input('password');
        $telefono1 = $request->input('telefono1');
        $telefono2 = $request->input('telefono2');
        $direccion  = $request->input('direccion');
        $referencia = $request->input('referencia');
        $municipio = $request->input('municipio');
        $descripcion = $request->input('descripcion');


        $logo = trim( $request->logo->getClientOriginalName() );
        // path /storage/empresas_logo/
        $path = $request->logo->storeAs('empresas_logo', $logo );
        
        DB::beginTransaction();
        try {
            $empresa = new empresa;
            $empresa->nit = $nit;
            $empresa->pass = Hash::make($password);
            $empresa->nombre_comercial = $comercial;
            $empresa->nombre_juridico = $juridico;
            $empresa->descripcion = $descripcion;
            $empresa->correo = $email;
            $empresa->telefono1 = $telefono1;
            $empresa->telefono2 = $telefono2;
            $empresa->logo = $logo;
            $empresa->cod_giro = $giro;

            $success = $empresa->save();
            if($success){
                $direccionE = new direccion_empresa;
                $direccionE->lugar = $direccion;
                $direccionE->referencia = $referencia;
                $direccionE->nit = $nit;
                $direccionE->cod_municipio = $municipio;
                $success = $direccionE->save();
                if($success){
                    DB::commit(); 
                }else{
                    $response['errorMessage'] = 'Revise los datos de la direccion';
                    DB::rollback();
                }
            }else{
                $response['errorMessage'] = 'Revise los datos de la empresa';
                DB::rollback();
            }
        } catch (\Exception $e) {
            $success = false;
            DB::rollback();
        }

        // Storage::url($path);
        $response['error'] = !$success;
        
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
