<?php

namespace App\Http\Controllers;

use App\empresa;
use App\persona;
use App\User;
use Illuminate\Http\Request;

class GestorController extends Controller
{
    public function index(){
    	return view('gestor.dashboard');
    }


    public function empresas(){

        $empresas = empresa::paginate(15);
//        return response()->json($empresas);
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
