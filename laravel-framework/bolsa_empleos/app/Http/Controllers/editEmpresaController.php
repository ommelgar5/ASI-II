<?php

namespace App\Http\Controllers;

use App\Http\Requests\ManttoEmpresa\EmpresaRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\empresa;
use App\giro_empresa;


class editEmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        
        $empresa = Auth::guard('empresa')->user();
        $empresa->giro_empresa;
        return view('empresa.index',['empresa'=>$empresa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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
       $empresa = empresa::find($id);
       $girosEmpresas = giro_empresa::all();

        return view('empresa.editPerfilEmpresa',['empresa'=>$empresa,'girosEmpresas'=>$girosEmpresas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( EmpresaRequest $request, $id)
    {
        $empresa = empresa::find($id);
        $empresa->fill($request->all());
        $empresa->save();
        Session::flash('message',"<strong>¡Empresa!</strong> editado correctamente");
        return Redirect::to('/editPerfilEmpresa');
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

    // VER PERFIL

    public function perfil(){
        $persona = persona::where('dui',Auth::user()->dui)->first();
        $id = persona::where('dui',Auth::user()->dui)->first()->id;
        $persona->estadocivil;
        $persona->licencia;
        $persona->a_experiencia;
        $persona->experiencia_laboral;

        foreach ($persona->experiencia_laboral as $experiencia){
            $experiencia->giro_empresa;
            $experiencia->cargo_empresa;
        }

        $persona->estudios;

        foreach($persona->estudios as $estudio){
            $estudio->nivel_estudio;
            $estudio->area_estudio;
        }

        $idiomas = idioma_solicitante::where('persona_id',$id)->get();
        foreach($idiomas as $idioma){
            $idioma->idioma;
            $idioma->nivel;
        }

        $programas = programa_solicitante::where('persona_id',$id)->get();
        foreach($programas as $programa){
            $programa->programa;
            $programa->nivel;
        }

        // return response()->json($persona);

        return view('usuario.perfil',['persona'=>$persona,'idiomas'=>$idiomas,'programas'=>$programas]);
    }
}
