<?php

namespace App\Http\Controllers\ManttoEmpresa;

use App\cargo_empresa;
use App\experiencia_oferta;
use App\Http\Requests\ManttoEmpresa\ExperienciaRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ExperienciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id){
        $experiencias = experiencia_oferta::where('cod_oferta',$id)->get();
        foreach ($experiencias as $experiencia){
            $experiencia->cargo;
        }
//        return response()->json($experiencias);

        return view('empresa.ofertas.experiencias.index',['experiencias'=>$experiencias,'idOferta'=>$id]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $cargos = cargo_empresa::all();

        return view('empresa.ofertas.experiencias.create',['cargos'=>$cargos,'idOferta'=>$id]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store( ExperienciaRequest $request)
    {
        $idOferta = $request->input('cod_oferta');
        $experiencia = new experiencia_oferta();
        $experiencia->fill($request->all());
        $success = $experiencia->save();

        if($success){
            Session::flash('message',"<strong>¡Experiencia!</strong> agregada correctamente");
            return Redirect::to("/editExper/$idOferta");
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
        $experiencia = experiencia_oferta::find($id);
        $cargos = cargo_empresa::all();

//        return response()->json($experiencia);

        return view('empresa.ofertas.experiencias.edit',['experiencia'=>$experiencia,'cargos'=>$cargos]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ExperienciaRequest $request, $id)
    {
        $experiencia = experiencia_oferta::find($id);
        $experiencia->fill($request->all());
        $experiencia->save();
        Session::flash('message',"<strong>¡Experiencia!</strong> editada correctamente");
        return Redirect::to("/editExper/$experiencia->cod_oferta");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $experiencia = experiencia_oferta::find($id);
        $experiencia->delete();

        Session::flash('message',"<strong>¡Experiencia!</strong> eliminada correctamente");
        return Redirect::to("/editExper/$experiencia->cod_oferta");
    }
}
