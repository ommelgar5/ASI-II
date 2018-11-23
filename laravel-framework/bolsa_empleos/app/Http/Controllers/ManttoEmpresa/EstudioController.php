<?php

namespace App\Http\Controllers\ManttoEmpresa;

use App\area_estudio;
use App\estudio_oferta;
use App\Http\Requests\ManttoEmpresa\EstudioRequest;
use App\nivel_estudio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class EstudioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {

        $estudios = estudio_oferta::where('cod_oferta',$id)->get();
        foreach ($estudios as $estudio){
            $estudio->nivel_estudio;
            $estudio->area_estudio;
        }


//        return response()->json($estudios);

        return view('empresa.ofertas.estudios.index',['estudios'=>$estudios,'idOferta'=>$id]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $nivelesEstudios = nivel_estudio::all();
        $areasEstudios = area_estudio::all();

        return view('empresa.ofertas.estudios.create',['nivelesEstudios'=>$nivelesEstudios,'areasEstudios'=> $areasEstudios,'idOferta'=>$id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EstudioRequest $request)
    {
        $idOferta = $request->input('cod_oferta');
        $estudio = new estudio_oferta();
        $estudio->fill($request->all());
        $success = $estudio->save();

        if($success){
            Session::flash('message',"<strong>¡Estudio!</strong> agregado correctamente");
            return Redirect::to("/editEst/$idOferta");
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
        $estudio = estudio_oferta::find($id);
        $nivelesEstudios = nivel_estudio::all();
        $areasEstudios = area_estudio::all();

//        return response()->json($estudio);

        return view('empresa.ofertas.estudios.edit',['estudio'=>$estudio,'areasEstudios'=>$areasEstudios,'nivelesEstudios'=>$nivelesEstudios]);
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
        $estudio = estudio_oferta::find($id);
        $estudio->fill($request->all());
        $estudio->save();
        Session::flash('message',"<strong>¡Estudio!</strong> editado correctamente");
        return Redirect::to("/editEst/$estudio->cod_oferta");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estudio = estudio_oferta::find($id);
        $estudio->delete();

        Session::flash('message',"<strong>¡Estudio!</strong> eliminado correctamente");
        return Redirect::to("/editEst/$estudio->cod_oferta");
    }
}
