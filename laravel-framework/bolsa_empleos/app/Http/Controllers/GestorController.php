<?php

namespace App\Http\Controllers;

use App\empresa;
use App\genero;
use App\persona;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class GestorController extends Controller
{
    public function index(){
    	return view('gestor.dashboard');
    }

    public function perfil(){

        $gestor = persona::where('dui',Auth::user()->dui)->first();
        $gestor->genero;
//        return response()->json($gestor);
        return view('gestor.perfil',['gestor'=>$gestor]);

    }

    public function editPerfil(){
        $gestor = persona::where('dui',Auth::user()->dui)->first();
        $generos = genero::all();

        return view('gestor.editPerfil',['gestor'=>$gestor,'generos'=>$generos]);
    }


    public function updatePerfil(Request $request){
        $gestor = persona::where('dui',Auth::user()->dui)->first();
        $gestor->nombre = $request->input('nombre');
        $gestor->apellido = $request->input('apellido');
        $gestor->fech_nac = $request->input('fech_nac');
        $gestor->correo = $request->input('correo');
        $gestor->telefono1 = $request->input('telefono1');
        $gestor->telefono2 = $request->input('telefono2');
        $gestor->cod_genero = $request->input('cod_genero');
        $gestor->save();
        Session::flash('message',"<strong>¡Perfil!</strong> editado correctamente");
        return Redirect::to('/gestor/perfil');
    }

    public function createPerfil(){
        $generos = genero::all();
        return view('gestor.create', ['generos'=>$generos]);
    }

    public function storePerfil(Request $request){

        return response()->json($request);

    }





    public function empresas(){

        $empresas = empresa::paginate(15);
        return view('gestor.empresas',['empresas'=>$empresas]);
    }

    public function empresa($id){

        $empresa = empresa::find($id);
        $empresa->isActive = !$empresa->isActive;
        $empresa->save();

        $empresas = empresa::paginate(15);
        return view('gestor.empresas',['empresas'=>$empresas]);
    }

    public function empDet($id){
        $respose = [];
        $respose['error'] = false;
        $empresa = empresa::find($id);

        if($empresa){
            $empresa->giro_empresa;
            $respose['data'] = $empresa;
        }else{
            $respose['error'] = true;
        }

        return response()->json($respose);
    }



    public function usuarios(){

        $usuarios = User::where('cod_tipo_usuario',2)->paginate(15);
        foreach ($usuarios as $usuario){
            $usuario->persona;
        }

//        $usuarios = Persona::whereHas('usuarios', function($q){ $q->where('cod_tipo_usuario',2); })->get();

        return view('gestor.usuarios',['usuarios'=>$usuarios]);
    }

    public function usuario($id){

        $usuario = User::where('dui',$id)->first();
        $usuario->is_active = !$usuario->is_active;
        $usuario->save();

        $usuarios = User::where('cod_tipo_usuario',2)->paginate(15);
        foreach ($usuarios as $usuario){
            $usuario->persona;
        }
        return view('gestor.usuarios',['usuarios'=>$usuarios]);
    }

    public function useDet($id){
        $respose = [];
        $respose['error'] = false;
        $usuario = persona::where('dui',$id)->first();

        if($usuario){
            $usuario->genero;
            $usuario->estadoCivil;
            $usuario->a_experiencia;
            $usuario->licencia;
            $respose['data'] = $usuario;
        }else{
            $respose['error'] = true;
        }

        return response()->json($respose);
    }


}
