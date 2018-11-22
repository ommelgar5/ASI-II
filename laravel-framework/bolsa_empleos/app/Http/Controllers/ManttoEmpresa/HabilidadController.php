<?php

namespace App\Http\Controllers\ManttoEmpresa;

use App\estudio_oferta;
use App\nivel;
use App\oferta_programa;
use App\programa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HabilidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $programas = oferta_programa::where('cod_oferta',$id)->get();

        foreach ($programas as $programa){
            $programa->programa;
            $programa->nivel;
        }
//        return response()->json($programas);

        return view('empresa.ofertas.programas.index',['programas'=>$programas,'idOferta'=>$id]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cargos = cargo_empresa::all();

        return view('empresa.ofertas.experiencias.create',['cargos'=>$cargos,'idOferta'=>$id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $idOferta = $request->input('cod_oferta');
        $experiencia = new experiencia_oferta();
        $experiencia->fill($request->all());
        $success = $experiencia->save();

        if($success){
            Session::flash('message',"<strong>¡Experiencia!</strong> agregada correctamente");
            return Redirect::to("/editExper/$idOferta");
        }
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
        $programa = oferta_programa::find($id);
        $programas = programa::all();
        $niveles = nivel::all();

//        return response()->json($experiencia);

        return view('empresa.ofertas.programas.edit',['programa'=>$programa,'programas'=>$programas,'niveles'=>$niveles]);
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
        $experiencia = experiencia_oferta::find($id);
        $experiencia->fill($request->all());
        $experiencia->save();
        Session::flash('message',"<strong>¡Experiencia!</strong> editada correctamente");
        return Redirect::to("/editExper/$experiencia->cod_oferta");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $experiencia = experiencia_oferta::find($id);
        $experiencia->delete();

        Session::flash('message',"<strong>¡Experiencia!</strong> eliminada correctamente");
        return Redirect::to("/editExper/$experiencia->cod_oferta");
    }
}
