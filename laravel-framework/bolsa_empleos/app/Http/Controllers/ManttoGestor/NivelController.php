<?php

namespace App\Http\Controllers\ManttoGestor;

use App\Http\Requests\ManttoGestor\NivelRequest;
use App\nivel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class NivelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $niveles = nivel::paginate(15);
        return view('mantto.nivel.index',['niveles'=>$niveles]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mantto.nivel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NivelRequest $request)
    {
        $nivel = new nivel();
        $nivel->fill($request->all());
        $success = $nivel->save();

        if($success){
            Session::flash('message',"<strong>¡Nivel!</strong> agregado correctamente");
            return Redirect::to("/nivel");
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nivel = nivel::find($id);
        return view('mantto.nivel.edit',['nivel' => $nivel]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NivelRequest $request, $id)
    {
        $nivel = nivel::find($id);
        $nivel->nivel = $request->input('nivel');
        $nivel->save();
        Session::flash('message',"<strong>¡Nivel!</strong> editado correctamente");
        return Redirect::to("/nivel");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nivel = nivel::find($id);
        $nivel->delete();

        Session::flash('message',"<strong>¡Nivel!</strong> eliminado correctamente");
        return Redirect::to("/nivel");
    }
}
