<?php

namespace App\Http\Controllers;

use App\empresa;
use App\User;
use App\a_experiencia;
use App\direccion_solicitante;
use App\gestion;
use App\idioma_solicitante;
use App\persona;
use App\programa_solicitante;
use App\tipo_contrato;
use App\genero;
use App\departamento;
use App\municipio;
use App\licencia;
use App\estudio;
use App\area_estudio;
use App\programa;
use App\idioma;
use App\nivel;
use App\nivel_estudio;
use App\cargo_empresa;
use App\oferta_laboral;
use App\experiencia_oferta;
use App\oferta_idioma;
use App\estudio_oferta;
use App\oferta_programa;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class GestorController extends Controller
{
    public function index(){
        $usuarios_dia = User::whereDate('created_at','=',today()->toDateString())->get()->count();
        $empresas_dia  = empresa::whereDate('created_at','=',today()->toDateString())->get()->count();
        $ofertas_dia = oferta_laboral::whereDate('fecha','=',today()->toDateString())->get()->count();

        $usuarios_mes = User::whereMonth('created_at','=', now()->month)->get()->count();
        $empresas_mes  = empresa::whereMonth('created_at','=',now()->month)->get()->count();
        $ofertas_mes = oferta_laboral::whereMonth('fecha','=',now()->month)->get()->count();

        $usuarios_total = User::all()->count();
        $empresas_total = empresa::all()->count();
        $ofertas_total = oferta_laboral::all()->count();

    	return view('gestor.dashboard',['usuarios_nuevos_dia'=>$usuarios_dia, 'empresas_nuevas_dia'=>$empresas_dia, 'ofertas_nuevas_dia'=>$ofertas_dia, 'usuarios_nuevos_mes'=>$usuarios_mes, 'empresas_nuevas_mes'=>$empresas_mes, 'ofertas_nuevas_mes'=>$ofertas_mes, 'usuarios_total' => $usuarios_total, 'empresas_total' => $empresas_total, 'ofertas_total' => $ofertas_total ]);
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

    public function createPerf(Request $request){

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

    public function usuariosDia(){
        $usuarios = User::whereDate('created_at','=',today()->toDateString())->paginate(15);
        return view('gestor.usuarios',['usuarios'=>$usuarios]);
    }

    public function usuariosMes(){
        $usuarios = User::whereMonth('created_at','=', now()->month)->paginate(15);
        return view('gestor.usuarios',['usuarios'=>$usuarios]);
    }

    public function empresasDia(){
        $empresas  = empresa::whereDate('created_at','=',today()->toDateString())->paginate(15);
        return view('gestor.empresas',['empresas'=>$empresas]);
    }

    public function empresasMes(){
        $empresas  = empresa::whereMonth('created_at','=',now()->month)->paginate(15);
        return view('gestor.empresas',['empresas'=>$empresas]);
    }

    public function ofertaActivar($id){

        $oferta = oferta_laboral::find($id);
        $oferta->isActive = !$oferta->isActive;
        $oferta->save();

        $ofertas = oferta_laboral::paginate(15);
        return view('gestor.ofertas')->with('ofertas',$ofertas);
    }

    public function oferta($id){
        $oferta = oferta_laboral::find($id);
        $oferta->setRelation('aplicaciones', $oferta->aplicaciones()->paginate(15));
        return view('gestor.ofertaDetalle')->with('oferta',$oferta);
    }

    public function ofertas(){
        $ofertas = oferta_laboral::paginate(15);
        return view('gestor.ofertas')->with('ofertas',$ofertas);
    }

    public function ofertasDia(){
        $ofertas = oferta_laboral::whereDate('fecha','=',today()->toDateString())->paginate(15);
        return view('gestor.ofertas')->with('ofertas',$ofertas);
    }

    public function ofertasMes(){
        $ofertas = oferta_laboral::whereMonth('fecha','=',now()->month)->paginate(15);
        return view('gestor.ofertas')->with('ofertas',$ofertas);
    }

    public function curriculum($id){

        $persona = persona::where('id',$id)->first();

        if(!$persona){
            return Redirect::to('/empresa/dashboard');
        }

        $persona->estadocivil;
        $persona->licencia;
        $persona->a_experiencia;
        $persona->experiencia_laboral;

        foreach ($persona->experiencia_laboral as $experiencia){
            $experiencia->giro_empresa;
            $experiencia->cargo_empresa;
        }

        $persona->estudios;

        foreach($persona->estudios as $estudio){
            $estudio->nivel_estudio;
            $estudio->area_estudio;
        }

        $idiomas = idioma_solicitante::where('persona_id',$id)->get();
        foreach($idiomas as $idioma){
            $idioma->idioma;
            $idioma->nivel;
        }

        $programas = programa_solicitante::where('persona_id',$id)->get();
        foreach($programas as $programa){
            $programa->programa;
            $programa->nivel;
        }

        $direccion = direccion_solicitante::where('persona_id',$id)->first();
        $direccion->municipio;
        $direccion->municipio->departamento;

//        return response()->json($direccion);

        return view('gestor.curriculum',['persona'=>$persona,'idiomas'=>$idiomas,'programas'=>$programas,'direccion'=>$direccion]);


    }

}
