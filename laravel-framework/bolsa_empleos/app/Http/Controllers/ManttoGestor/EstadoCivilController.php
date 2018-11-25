<?php

namespace App\Http\Controllers\ManttoGestor;

use App\estadocivil;
use App\Http\Requests\ManttoGestor\EstadoCiviloRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class EstadoCivilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estadosCiviles = estadocivil::paginate(15);
        return view('mantto.estadoCivil.index',['estadosCiviles'=>$estadosCiviles]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mantto.estadoCivil.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EstadoCiviloRequest $request)
    {

        $estadoCivil = new estadocivil();
        $estadoCivil->fill($request->all());
        $success = $estadoCivil->save();

        if($success){
            Session::flash('message',"<strong>¡Estado civil!</strong> agregado correctamente");
            return Redirect::to("/estadoCivil");
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
        $estadoCivil = estadocivil::find($id);
        return view('mantto.estadoCivil.edit',['estadoCivil' => $estadoCivil]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EstadoCiviloRequest $request, $id)
    {
        $estadoCivil = estadoCivil::find($id);
        $estadoCivil->estado = $request->input('estado');
        $estadoCivil->save();
        Session::flash('message',"<strong>¡Estado civil!</strong> editado correctamente");
        return Redirect::to("/estadoCivil");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estadoCivil = estadocivil::find($id);
        $estadoCivil->delete();

        Session::flash('message',"<strong>¡Estdo civil!</strong> eliminado correctamente");
        return Redirect::to("/estadoCivil");

    }
}
