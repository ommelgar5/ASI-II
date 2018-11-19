<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\persona;
use Illuminate\Support\Facades\Auth;


class editUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $id = Auth::User()->id;

        $persona = persona::find($id);
        $genero  = persona::find($id)->genero;
        $estadoCivil = persona::find($id)->estadocivil;
        $aExperiencia = persona::find($id)->a_experiencia;
        $licencia = persona::find($id)->licencia;

        return view('usuario.index',
                    ['persona'     => $persona,
                     'genero'       => $genero,
                     'estadoCivil'  => $estadoCivil,
                     'aExperiencia' => $aExperiencia,
                     'licencia'     => $licencia
                    ]);

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
