<?php

namespace App\Http\Controllers\ManttoGestor;

use App\giro_empresa;
use App\Http\Requests\ManttoGestor\GiroEmpresaRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class GiroEmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $girosEmpresas = giro_empresa::paginate(15);
        return view('mantto.giroEmpresa.index',['girosEmpresas'=>$girosEmpresas]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mantto.giroEmpresa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GiroEmpresaRequest $request)
    {
        $giroEmpresa = new giro_empresa();
        $giroEmpresa->fill($request->all());
        $success = $giroEmpresa->save();

        if($success){
            Session::flash('message',"<strong>¡Giro empresa!</strong> agregado correctamente");
            return Redirect::to("/giroEmpresa");
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
        $giroEmpresa = giro_empresa::find($id);
        return view('mantto.giroEmpresa.edit',['giroEmpresa' => $giroEmpresa]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GiroEmpresaRequest $request, $id)
    {
        $giroEmpresa = giro_empresa::find($id);
        $giroEmpresa->giro = $request->input('giro');
        $giroEmpresa->save();
        Session::flash('message',"<strong>¡Giro empresa!</strong> editado correctamente");
        return Redirect::to("/giroEmpresa");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $giroEmpresa = giro_empresa::find($id);
        $giroEmpresa->delete();

        Session::flash('message',"<strong>¡Giro empresa!</strong> eliminada correctamente");
        return Redirect::to("/giroEmpresa");
    }
}
