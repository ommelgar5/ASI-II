<?php

namespace App\Http\Controllers\ManttoGestor;

use App\area_estudio;
use App\Http\Requests\ManttoGestor\AreaEstudioRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class AreaEstudioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $areasEstudios = area_estudio::paginate(15);
        return view('mantto.areaEstudio.index',['areasEstudios'=>$areasEstudios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mantto.areaEstudio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AreaEstudioRequest $request)
    {
        $areaEstudio = new area_estudio();
        $areaEstudio->fill($request->all());
        $success = $areaEstudio->save();

        if($success){
            Session::flash('message',"<strong>¡Area Estudio!</strong> agregada correctamente");
            return Redirect::to("/areaEstudio");
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
        $area = area_estudio::find($id);

//        return response()->json($area);
        return view('mantto.areaEstudio.edit',['area' => $area]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AreaEstudioRequest $request, $id)
    {
        $areaEstudio = area_estudio::find($id);
        $areaEstudio->fill($request->all());
        $areaEstudio->save();
        Session::flash('message',"<strong>¡Área de estudio!</strong> editada correctamente");
        return Redirect::to("/areaEstudio");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ofertaEstudio = area_estudio::find($id);
        $ofertaEstudio->delete();

        Session::flash('message',"<strong>¡Area estudio!</strong> eliminada correctamente");
        return Redirect::to("/areaEstudio");
    }
}
