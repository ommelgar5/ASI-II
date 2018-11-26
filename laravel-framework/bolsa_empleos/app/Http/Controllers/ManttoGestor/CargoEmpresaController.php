<?php

namespace App\Http\Controllers\ManttoGestor;

use App\area_empresa;
use App\cargo_empresa;
use App\Http\Requests\ManttoGestor\cargoEmpresaRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class CargoEmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $areasEmpresas = area_empresa::all();
        return view('mantto.cargoEmpresa.index',['areasEmpresas'=>$areasEmpresas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $areasEmpresas = area_empresa::all();
        return view('mantto.cargoEmpresa.create', ['areasEmpresas'=>$areasEmpresas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CargoEmpresaRequest $request)
    {
        $cargoEmpresa = new cargo_empresa();
        $cargoEmpresa->fill($request->all());
        $success = $cargoEmpresa->save();

        if($success){
            Session::flash('message',"<strong>¡Cargo empresa!</strong> agregado correctamente");
            return Redirect::to("/cargoEmpresa");
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cargoEmpresa = cargo_empresa::find($id);
        $areasEmpresas = area_empresa::all();
        return view('mantto.cargoEmpresa.edit',['cargoEmpresa' => $cargoEmpresa,'areasEmpresas'=>$areasEmpresas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CargoEmpresaRequest $request, $id)
    {
        $cargoEmpresa = cargo_empresa::find($id);
        $cargoEmpresa->fill( $request->all());
        $cargoEmpresa->save();
        Session::flash('message',"<strong>¡Cargo empresa!</strong> editado correctamente");
        return Redirect::to("/cargoEmpresa");
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

    public function delete( Request $request){

        $error['error'] = false;
        $cod_cargo = $request->input('cod_cargo');
        if($cod_cargo){
            $cargoEmpresa = cargo_empresa::find($cod_cargo);
            $cargoEmpresa->delete();
        }else{
            $error['error'] = true;
        }
        return response()->json($error);


    }
}
