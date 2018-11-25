<?php

namespace App\Http\Controllers\ManttoGestor;

use App\genero;
use App\Http\Requests\ManttoGestor\GeneroRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class GeneroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $generos = genero::paginate(15);
        return view('mantto.genero.index',['generos'=>$generos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mantto.genero.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GeneroRequest $request)
    {
        $genero = new genero();
        $genero->fill($request->all());
        $success = $genero->save();

        if($success){
            Session::flash('message',"<strong>¡Genero!</strong> agregado correctamente");
            return Redirect::to("/genero");
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
        $genero = genero::find($id);
        return view('mantto.genero.edit',['genero' => $genero]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( GeneroRequest $request, $id)
    {
        $genero = genero::find($id);
        $genero->genero = $request->input('genero');
        $genero->save();
        Session::flash('message',"<strong>¡Genero!</strong> editado correctamente");
        return Redirect::to("/genero");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $genero = genero::find($id);
        $genero->delete();

        Session::flash('message',"<strong>¡Genero!</strong> eliminado correctamente");
        return Redirect::to("/genero");

    }
}
