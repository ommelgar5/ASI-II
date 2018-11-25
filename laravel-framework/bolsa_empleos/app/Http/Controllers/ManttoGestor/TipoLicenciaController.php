<?php

namespace App\Http\Controllers\ManttoGestor;

use App\Http\Requests\ManttoGestor\TipoLicenciaRequest;
use App\licencia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class TipoLicenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiposLicencias = licencia::paginate(15);
        return view('mantto.tipoLicencia.index',['tiposLicencias'=>$tiposLicencias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mantto.tipoLicencia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TipoLicenciaRequest $request)
    {
        $tipoLicencia = new licencia();
        $tipoLicencia->fill($request->all());
        $success = $tipoLicencia->save();

        if($success){
            Session::flash('message',"<strong>¡Tipo Licencia!</strong> agregado correctamente");
            return Redirect::to("/tipoLicencia");
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
        $tipoLicencia = licencia::find($id);
        return view('mantto.tipoLicencia.edit',['tipoLicencia' => $tipoLicencia]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TipoLicenciaRequest $request, $id)
    {
        $tipoLicencia = licencia::find($id);
        $tipoLicencia->tipo = $request->input('tipo');
        $tipoLicencia->save();
        Session::flash('message',"<strong>¡Tipo Lincencia!</strong> editado correctamente");
        return Redirect::to("/tipoLicencia");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipoLicencia = licencia::find($id);
        $tipoLicencia->delete();

        Session::flash('message',"<strong>¡Tipo Licencia!</strong> eliminado correctamente");
        return Redirect::to("/tipoLicencia");
    }
}
