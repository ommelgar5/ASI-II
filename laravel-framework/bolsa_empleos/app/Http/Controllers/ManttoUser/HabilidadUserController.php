<?php

namespace App\Http\Controllers\ManttoUser;

use App\Http\Requests\ManttoUser\HabilidadResquest;
use App\nivel;
use App\persona;
use App\programa;
use App\programa_solicitante;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class HabilidadUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $persona = persona::where('dui',Auth::user()->dui)->first()->id;
        $programas = programa_solicitante::where('persona_id',$persona)->get();

        foreach ($programas as $programa){
            $programa->programa;
            $programa->nivel;
        }

        return view('usuario.habilidades.index', ['data'=> $programas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'programas' => programa::all(),
            'niveles' => nivel::all()
        ];

        return view('usuario.habilidades.create',['data' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HabilidadResquest $request)
    {
        $programa = new programa_solicitante();
        $programa->persona_id = persona::where('dui',Auth::user()->dui)->first()->id;
        $programa->cod_programa = $request->input('cod_programa');
        $programa->cod_nivel = $request->input('cod_nivel');
        $success = $programa->save();

        if($success){
            Session::flash('message',"<strong>¡Habilidad!</strong> agregada correctamente");
            return Redirect::to('/editHabilidad');
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
        $programaSolic = programa_solicitante::find($id);
        $programas = programa::all();
        $niveles = nivel::all();

        return view('usuario.habilidades.edit',['programaSolic'=>$programaSolic,'programas'=>$programas,'niveles'=>$niveles]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(HabilidadResquest $request, $id)
    {
        $programa = programa_solicitante::find($id);
        $programa->fill($request->all());
        $programa->save();
        Session::flash('message',"<strong>¡Habilidad!</strong> editada correctamente");
        return Redirect::to('/editHabilidad');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $programa = programa_solicitante::find($id);
        $programa->delete();

        Session::flash('message',"<strong>¡Habilidad!</strong> eliminada correctamente");
        return Redirect::to('/editHabilidad');
    }
}
