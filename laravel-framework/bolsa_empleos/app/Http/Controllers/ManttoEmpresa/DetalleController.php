<?php

namespace App\Http\Controllers\ManttoEmpresa;

use App\a_experiencia;
use App\genero;
use App\Http\Requests\ManttoEmpresa\DetalleRequest;
use App\licencia;
use App\oferta_laboral;
use App\tipo_contrato;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class detalleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
        $generos = genero::all();
        $licencias = licencia::all();
        $tiposContratos = tipo_contrato::all();
        $aExperiecias = a_experiencia::all();

        return view('empresa.ofertas.edit',['oferta'=>$oferta,'generos'=>$generos,'licencias'=>$licencias,'tiposContratos'=>$tiposContratos,'aExperiencias'=>$aExperiecias]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DetalleRequest $request, $id)
    {
        $oferta = oferta_laboral::find($id);
        $oferta->fill($request->all());
        $oferta->save();
        Session::flash('message',"<strong>¡Detalle de la ferta!</strong> editado correctamente");
        return Redirect::to("/editOferta/$id/edit");
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
