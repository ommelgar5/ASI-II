<?php

namespace App\Http\Controllers\ManttoUser;

use App\area_estudio;
use App\estudio;
use App\Http\Requests\ManttoUser\EstudioResquest;
use App\nivel;
use App\nivel_estudio;
use App\persona;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class EstudiosUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $persona = persona::where('dui',Auth::user()->dui)->first()->id;
        $estudios = estudio::where('persona_id',$persona)->get();

        foreach ($estudios as $estudio){
            $estudio->nivel_estudio;
            $estudio->area_estudio;
        }

        return view('usuario.estudios.index', ['data'=> $estudios]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $data = [
            'areaEstudios' => area_estudio::where('isActive',1)->get(),
            'nivelEstudios' => nivel_estudio::where('isActive',1)->get()
        ];


        return view('usuario.estudios.create',['data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EstudioResquest $request)
    {
        $estudio = new estudio();
        $estudio->persona_id = persona::where('dui',Auth::user()->dui)->first()->id;
        $estudio->cod_nivel_est = $request->input('cod_nivel_est');
        $estudio->cod_area_est = $request->input('cod_area_est');
        $estudio->especialidad = $request->input('especialidad');
        $estudio->a_inicio = $request->input('a_inicio');
        $estudio->a_fin = $request->input('a_fin');
        $estudio->actual = $request->input('actual');
        $estudio->nombre_institucion = $request->input('nombre_institucion');
        $success = $estudio->save();

        if($success){
            Session::flash('message',"<strong>¡Estudio!</strong> agregada correctamente");
            return Redirect::to('/editEstudio');
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
        $estudio = estudio::find($id);
        $areaEstudios = area_estudio::all();
        $nivelEstudios = nivel_estudio::all();

        return view('usuario.estudios.edit',['estudio'=>$estudio,'areaEstudios'=>$areaEstudios,'nivelEstudios'=>$nivelEstudios]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EstudioResquest $request, $id)
    {
        $estudio = estudio::find($id);
        $estudio->fill($request->all());
        $estudio->save();
        Session::flash('message',"<strong>¡Estudiol!</strong> editado correctamente");
        return Redirect::to('/editEstudio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estudio = estudio::find($id);
        $estudio->delete();

        Session::flash('message',"<strong>¡Estudio!</strong> eliminado correctamente");
        return Redirect::to('/editEstudio');
    }
}
