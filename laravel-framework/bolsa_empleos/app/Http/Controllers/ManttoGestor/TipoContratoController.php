<?php

namespace App\Http\Controllers\ManttoGestor;

use App\Http\Requests\ManttoGestor\TipoContratoRequest;
use App\tipo_contrato;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class TipoContratoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiposContratos = tipo_contrato::paginate(15);
        return view('mantto.tipoContrato.index',['tiposContratos'=>$tiposContratos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mantto.tipoContrato.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TipoContratoRequest $request)
    {
        $tipoContrato = new tipo_contrato();
        $tipoContrato->fill($request->all());
        $success = $tipoContrato->save();

        if($success){
            Session::flash('message',"<strong>¡Tipo Contrato!</strong> agregado correctamente");
            return Redirect::to("/tipoContrato");
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
        $tipoContrato = tipo_contrato::find($id);
        return view('mantto.tipoContrato.edit',['tipoContrato' => $tipoContrato]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TipoContratoRequest $request, $id)
    {
        $tipoContrato = tipo_contrato::find($id);
        $tipoContrato->contrato = $request->input('contrato');
        $tipoContrato->save();
        Session::flash('message',"<strong>¡Tipo de Contrato!</strong> editado correctamente");
        return Redirect::to("/tipoContrato");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipoContrato = tipo_contrato::find($id);
        $tipoContrato->delete();

        Session::flash('message',"<strong>¡Tipo de Contrato!</strong> eliminado correctamente");
        return Redirect::to("/tipoContrato");
    }
}
