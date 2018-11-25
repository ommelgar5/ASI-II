<?php

namespace App\Http\Controllers\ManttoGestor;

use App\a_experiencia;
use App\Http\Requests\ManttoGestor\AExperinciaRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class YearExperienciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aExperiencias = a_experiencia::paginate(15);
        return view('mantto.yearExperiencia.index',['aExperiencias'=>$aExperiencias]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mantto.yearExperiencia.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AExperinciaRequest $request)
    {

        $aExperiencia = new a_experiencia();
        $aExperiencia->fill($request->all());
        $success = $aExperiencia->save();

        if($success){
            Session::flash('message',"<strong>¡Años de experiencia!</strong> agregado correctamente");
            return Redirect::to("/aExperiencia");
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

        $aExperiencia = a_experiencia::find($id);
        return view('mantto.yearExperiencia.edit',['aExperiencia' => $aExperiencia]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AExperinciaRequest $request, $id)
    {
        $aExperiencia = a_experiencia::find($id);
        $aExperiencia->a_experiecia = $request->input('a_experiecia');
        $aExperiencia->save();
        Session::flash('message',"<strong>¡Año de experiencia!</strong> editado correctamente");
        return Redirect::to("/aExperiencia");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aExperiencia = a_experiencia::find($id);
        $aExperiencia->delete();

        Session::flash('message',"<strong>¡Años de experiecia!</strong> eliminado correctamente");
        return Redirect::to("/aExperiencia");

    }
}
