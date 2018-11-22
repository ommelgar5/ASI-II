<?php

namespace App\Http\Controllers\ManttoEmpresa;

use App\estudio_oferta;
use App\Http\Requests\ManttoEmpresa\ProgramaRequest;
use App\nivel;
use App\oferta_programa;
use App\programa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

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
    public function create($id)
    {
        $programas = programa::all();
        $niveles = nivel::all();

        return view('empresa.ofertas.programas.create',['programas'=>$programas,'niveles'=>$niveles,'idOferta'=>$id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProgramaRequest $request)
    {
        $idOferta = $request->input('cod_oferta');
        $programaOferta = new oferta_programa();
        $programaOferta->fill($request->all());
        $success = $programaOferta->save();

        if($success){
            Session::flash('message',"<strong>¡Habilidad!</strong> agregada correctamente");
            return Redirect::to("/editHab/$idOferta");
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
        $programaOfer = oferta_programa::find($id);
        $programas = programa::all();
        $niveles = nivel::all();

//        return response()->json($experiencia);

        return view('empresa.ofertas.programas.edit',['programaOfer'=>$programaOfer,'programas'=>$programas,'niveles'=>$niveles]);
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
        $ofertaPrograma = oferta_programa::find($id);
        $ofertaPrograma->fill($request->all());
        $ofertaPrograma->save();
        Session::flash('message',"<strong>¡Habilidad!</strong> editada correctamente");
        return Redirect::to("/editHab/$ofertaPrograma->cod_oferta");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ofertaPrograma = oferta_programa::find($id);
        $ofertaPrograma->delete();

        Session::flash('message',"<strong>¡Habilidad!</strong> eliminada correctamente");
        return Redirect::to("/editHab/$ofertaPrograma->cod_oferta");
    }
}
