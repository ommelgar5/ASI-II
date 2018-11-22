<?php

namespace App\Http\Controllers\ManttoEmpresa;

use App\a_experiencia;
use App\cargo_empresa;
use App\estudio;
use App\estudio_oferta;
use App\experiencia_oferta;
use App\genero;
use App\idioma;
use App\licencia;
use App\nivel_estudio;
use App\oferta_idioma;
use App\oferta_laboral;
use App\oferta_programa;
use App\programa;
use App\tipo_contrato;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class OfertaEmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresa = Auth::guard('empresa')->user()->nit;
        $ofertas = oferta_laboral::where('nit',$empresa)->get();

        foreach ($ofertas as $oferta){
            $oferta->tipo_contrato;
            $oferta->a_experiencia;
            $oferta->genero;
            $oferta->licencia;
        }


//        return response()->json($ofertas);
        return view('empresa.ofertas.index',['ofertas'=>$ofertas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $oferta = oferta_laboral::find($id);
        $oferta->tipo_contrato;
        $oferta->a_experiencia;
        $oferta->genero;
        $oferta->licencia;
        $oferta->cargo_empresa;
        $oferta->estudio_oferta;
        $oferta->idiomas;
        $oferta->programas;


//
//
//        $detalle = [
//            'oferta' => oferta_laboral::find($id),
//            'generos' => genero::all(),
//            'licencias' => licencia::all(),
//            'tiposContratos' => tipo_contrato::all(),
//            'aExperiecias' => a_experiencia::all(),
//       ];
//
//        $experiencias = [
//          'experiencias' => experiencia_oferta::where('cod_oferta',$id)->get(),
//           'cargos' => cargo_empresa::all(),
//        ];
//
//        $estudios = [
//            'estudiosO' => estudio_oferta::where('cod_oferta', $id)->get(),
//            'nivelesEstudios' => nivel_estudio::all(),
//        ];
//
//        $programas = [
//            'progrmasO' =>oferta_programa::where('cod_oferta',$id)->get(),
//            'programas' =>programa::all(),
//        ];
//
//        $idiomas = [
//            'idiomasO' => oferta_idioma::where('cod_oferta', $id),
//            'idiomas' => idioma::all(),
//        ];



//        return response()->json($oferta);

        return view('empresa.ofertas.detalle',['oferta'=>$oferta]);

    }

    public function editDetalle(){

    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
