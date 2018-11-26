<?php

namespace App\Http\Controllers\Auth;

use App\a_experiencia;
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
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
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
        $ofertas = oferta_laboral::where('nit',Auth::guard('empresa')->user()->nit)->get();
        return view('empresa.dashboard',['ofertas'=>$ofertas]);
    }

    public function showNuevaOferta(){
        $data = array(
            'licencias' => licencia::where('isActive',1)->get(),
            'a_experiencia' => a_experiencia::all(),
            'generos' => genero::where('isActive',1)->get(),
            'departamentos' => departamento::where('isActive',1)->get(),
            'municipios' => municipio::where('isActive',1)->get(),
            'areasEstudio' => area_estudio::where('isActive',1)->get(),
            'nivelesEstudio' => nivel_estudio::where('isActive',1)->get(),
            'idiomas' => idioma::where('isActive',1)->get(),
            'niveles' => nivel::where('isActive',1)->get(),
            'programas' => programa::where('isActive',1)->get(),
            'cargos_empresa' => cargo_empresa::where('isActive',1)->get(),
            'tipo_contrato' => tipo_contrato::where('isActive',1)->get()
        );
        return view('empresa.nuevaOferta',['data'=>$data]);
    }

    public function creaOferta(Request $request){
        $success = false;
        DB::beginTransaction();
        try {

            $nueva_oferta = new oferta_laboral;

            $nueva_oferta->titulo = $request->input('cargo');
            $nueva_oferta->descripcion = $request->input('descripcion');
            $nueva_oferta->fechaLimite = $request->input('fechaLimite');
            $nueva_oferta->cod_a_experiencia = $request->input('a_experiencia');
            $nueva_oferta->cod_contrato = $request->input('tipo_contrato');
            $nueva_oferta->numero_plaza = $request->input('plazas');
            $nueva_oferta->edad_min = $request->input('edad_min');
            $nueva_oferta->edad_max = $request->input('edad_max');
            $nueva_oferta->salario_min = $request->input('salario_min');
            $nueva_oferta->salario_max = $request->input('salario_max');
            $nueva_oferta->cod_genero = $request->input('genero');
            // $nueva_oferta-> = $request->input('departamento');
            // $nueva_oferta-> = $request->input('municipio');
            $nueva_oferta->vehiculo = $request->input('auto');
            $nueva_oferta->cod_licencia = $request->input('tipo_licencia');
            $nueva_oferta->isActive = 1;
            $nueva_oferta->nit = Auth::guard('empresa')->user()->nit;
            
            $success = $nueva_oferta->save();
            
            if($success){
                
                $cargos_oferta = $request->input('cargos');
                if(count($cargos_oferta)>0){
                    foreach($cargos_oferta as $cargo){
                        try {
                            $tmp = new experiencia_oferta;
                            $tmp->cod_cargo = $cargo;
                            $tmp->cod_oferta = $nueva_oferta->cod_oferta;
                            $success = $tmp->save();   
                        }catch (\Exception $e) {
                            $success = false;
                            DB::rollback();
                        }
                    }
                }

                if(count($request->input('nivelEst')) > 0 ){
                    for ($i=0; $i < count($request->input('nivelEst')) ; $i++) { 
                        try{    
                            $tmp = new estudio_oferta;
                            $tmp->cod_area_est = $request->input('estudio')[$i];
                            $tmp->cod_oferta = $nueva_oferta->cod_oferta;
                            $tmp->cod_nivel_est = $request->input('nivelEst')[$i];
                            $success = $tmp->save();
                        }catch (\Exception $e) {
                            $success = false;
                            DB::rollback();
                        }
                    }
                }
                
                if(count($request->input('programa')) > 0 ){
                    for ($i=0; $i < count($request->input('programa')); $i++) { 
                        try{ 
                            $tmp = new oferta_programa;
                            $tmp->cod_oferta = $nueva_oferta->cod_oferta;
                            $tmp->cod_programa = $request->input('programa')[$i];
                            $tmp->cod_nivel = $request->input('nivelPrograma')[$i];
                            $success = $tmp->save();
                        }catch (\Exception $e) {
                            $success = false;
                            DB::rollback();
                        }
                    }
                }
                
                if(count($request->input('idioma')) > 0){
                    for ($i=0; $i < count($request->input('idioma')); $i++) { 
                        try{
                            $tmp = new oferta_idioma;
                            $tmp->cod_oferta = $nueva_oferta->cod_oferta;
                            $tmp->cod_idioma = $request->input('idioma')[$i];
                            $tmp->cod_nivel = $request->input('idiomaNivel')[$i];
                            $success = $tmp->save();
                        }catch (\Exception $e) {
                            $success = false;
                            DB::rollback();
                        }
                    }
                }
                
                if($success){
                     DB::commit(); 
                }else{
                    DB::rollback();
                }
            }else{
                $success = false;
                DB::rollback();
            }
        }catch (\Exception $e) {
            $success = false;
            DB::rollback();
        }

        $response['error'] = !$success;
        return response()->json($response);
    }

}
