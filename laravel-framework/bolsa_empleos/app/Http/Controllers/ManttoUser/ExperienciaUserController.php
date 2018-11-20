<?php

namespace App\Http\Controllers\ManttoUser;

use App\experiencia_laboral;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\persona;
use Illuminate\Support\Facades\Auth;

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
        //
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
        //
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
        //
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
