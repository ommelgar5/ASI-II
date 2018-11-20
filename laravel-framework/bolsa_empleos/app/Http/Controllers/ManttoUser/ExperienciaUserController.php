<?php

namespace App\Http\Controllers\ManttoUser;

use App\cargo_empresa;
use App\experiencia_laboral;
use App\giro_empresa;
use App\Http\Requests\ManttoUser\ExperienciaUpdateRequest;
use App\Http\Requests\UserUpdateRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\persona;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class ExperienciaUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $persona = persona::where('dui',Auth::user()->dui)->first()->id;
        $experiencias = experiencia_laboral::where('persona_id',$persona)->get();

        foreach ($experiencias as $experiencia){
           $experiencia->giro_empresa;
           $experiencia->cargo_empresa;
        }
        return view('usuario.experiencias.index', ['data'=> $experiencias]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'giroEmpresas' => giro_empresa::all(),
            'cargoEmpresas' => cargo_empresa::all()
        ];


        return view('usuario.experiencias.create',['data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ExperienciaUpdateRequest $request)
    {
        $experiencia = new experiencia_laboral();
        $experiencia->persona_id = persona::where('dui',Auth::user()->dui)->first()->id;
        $experiencia->empresa = $request->input('empresa');
        $experiencia->cod_giro = $request->input('cod_giro');
        $experiencia->puesto = $request->input('puesto');
        $experiencia->cod_cargo = $request->input('cod_cargo');
        $experiencia->descripcion = $request->input('descripcion');
        $experiencia->a_inicio = $request->input('a_inicio');
        $experiencia->a_fin = $request->input('a_fin');
        $experiencia->actual = $request->input('actual');
        $success = $experiencia->save();

        if($success){
            Session::flash('message',"<strong>¡Experiencia laboral!</strong> agregada correctamente");
            return Redirect::to('/editExperiencia');
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

        $experiencia = experiencia_laboral::find($id);
        $giroEmpresas = giro_empresa::all();
        $cargoEmpresas = cargo_empresa::all();

        return view('usuario.experiencias.edit',['experiencia'=>$experiencia,'giroEmpresas'=>$giroEmpresas,'cargoEmpresas'=>$cargoEmpresas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ExperienciaUpdateRequest $request, $id)
    {
        $experiencia = experiencia_laboral::find($id);
        $experiencia->fill($request->all());
        $experiencia->save();
        Session::flash('message',"<strong>¡Experiencia laboral!</strong> editado correctamente");
        return Redirect::to('/editExperiencia');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $experiencia = experiencia_laboral::find($id);
        $experiencia->delete();

        Session::flash('message',"<strong>¡Experiencia laboral!</strong> eliminada correctamente");
        return Redirect::to('/editExperiencia');
    }
}
