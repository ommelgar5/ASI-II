<?php

namespace App\Http\Controllers\ManttoGestor;

use App\departamento;
use App\municipio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class MunicipioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departamentos = departamento::all();
        return view('mantto.municipio.index',['departamentos'=>$departamentos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departamentos = departamento::all();
        return view('mantto.municipio.create', ['departamentos'=>$departamentos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $municipio = new municipio();
        $municipio->fill($request->all());
        $success = $municipio->save();

        if($success){
            Session::flash('message',"<strong>¡Municipio!</strong> agregado correctamente");
            return Redirect::to("/municipio");
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
        $municipio = municipio::find($id);
        $departamentos = departamento::all();
        return view('mantto.municipio.edit',['municipio' => $municipio,'departamentos'=>$departamentos]);
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
        $municipio = municipio::find($id);
        $municipio->fill( $request->all());
        $municipio->save();
        Session::flash('message',"<strong>¡Municipio!</strong> editado correctamente");
        return Redirect::to("/municipio");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }

    public function delete( Request $request){

        $error['error'] = false;
        $municipio = $request->input('municipio');
        if($municipio){
            $municipio = municipio::find($municipio);
            $municipio->delete();
        }else{
            $error['error'] = true;
        }
        return response()->json($error);


    }
}
