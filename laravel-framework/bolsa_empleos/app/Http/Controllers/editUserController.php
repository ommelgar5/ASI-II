<?php

namespace App\Http\Controllers;

use App\User;
use App\a_experiencia;
use App\direccion_solicitante;
use App\estadocivil;
use App\Http\Requests\UserUpdateRequest;
use App\licencia;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\persona;
use App\genero;
use App\idioma_solicitante;
use App\programa_solicitante;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;


class editUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $persona = persona::where('dui',Auth::user()->dui)->first();
        
        return view('usuario.index',['persona'=>$persona]);
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
        $data = [
        'persona' => persona::find($id),
        'generos' => genero::all(),
        'estadosCivil' => estadocivil::all(),
        'aExperiencias' => a_experiencia::all(),
        'licencias' => licencia::all()
        ];

        return view('usuario.editPerfil',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
        $persona = persona::find($id);
        $persona->fill($request->all());
        $persona->save();
        
        if($request->avatar){
            $ext = trim( $request->avatar->getClientOriginalExtension() );
            $nombre_avatar = md5(($persona->dui)).'.'.$ext;
            $path = $request->avatar->storeAs('aplicantes_avatar',$nombre_avatar);

            $user = User::find(Auth::user()->id);
            $user->avatar = $nombre_avatar;
            $user->save();
        }

        Session::flash('message',"<strong>¡Usuario!</strong> editado correctamente");
        return Redirect::to('/editPerfil');
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

        $direccion = direccion_solicitante::where('persona_id',$id)->first();
        $direccion->municipio;
        $direccion->municipio->departamento;


//         return response()->json($direccion);

        return view('usuario.perfil',['persona'=>$persona,'idiomas'=>$idiomas,'programas'=>$programas,'direccion'=>$direccion]);
    }
}
