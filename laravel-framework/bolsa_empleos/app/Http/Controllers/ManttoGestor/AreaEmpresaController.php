<?php

namespace App\Http\Controllers\ManttoGestor;

use App\area_empresa;
use App\Http\Requests\ManttoGestor\AreEmpresaRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;


class AreaEmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $areasEmpresas = area_empresa::paginate(15);
        return view('mantto.areaEmpresa.index',['areasEmpresas'=>$areasEmpresas]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mantto.areaEmpresa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AreEmpresaRequest $request)
    {
        $areaEmppresa = new area_empresa();
        $areaEmppresa->fill($request->all());
        $success = $areaEmppresa->save();

        if($success){
            Session::flash('message',"<strong>¡Area Empresa!</strong> agregada correctamente");
            return Redirect::to("/areaEmpresa");
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
        $area = area_empresa::find($id);
        return view('mantto.areaEmpresa.edit',['area' => $area]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AreEmpresaRequest $request, $id)
    {
        $areaEmpresa = area_empresa::find($id);
        $areaEmpresa->area = $request->input('area');
        $areaEmpresa->save();
        Session::flash('message',"<strong>¡Area Empresa!</strong> editado correctamente");
        return Redirect::to("/areaEmpresa");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ofertaIdioma = area_empresa::find($id);
        $ofertaIdioma->delete();

        Session::flash('message',"<strong>¡Area empresa!</strong> eliminada correctamente");
        return Redirect::to("/areaEmpresa");
    }
}
