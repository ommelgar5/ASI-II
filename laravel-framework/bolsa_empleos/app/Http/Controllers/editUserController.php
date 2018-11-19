<?php

namespace App\Http\Controllers;

use App\a_experiencia;
use App\estadocivil;
use App\Http\Requests\UserUpdateRequest;
use App\licencia;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\persona;
use App\genero;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;


class editUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $persona = persona::where('dui',Auth::user()->dui)->first();
        $persona->genero->genero;
        $persona->estadoCivil->estado;
        $persona->a_experiencia->a_experiecia;
        $persona->licencia->tipo;
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
}
