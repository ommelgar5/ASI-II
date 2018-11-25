<?php

namespace App\Http\Controllers\ManttoGestor;

use App\departamento;
use App\Http\Requests\ManttoGestor\DepartamentoRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class DepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departamentos = departamento::paginate(15);
        return view('mantto.departamento.index',['departamentos'=>$departamentos]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mantto.departamento.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DepartamentoRequest $request)
    {
        $departamento = new departamento();
        $departamento->fill($request->all());
        $success = $departamento->save();

        if($success){
            Session::flash('message',"<strong>¡Despartamento!</strong> agregado correctamente");
            return Redirect::to("/departamento");
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

        $departamento = departamento::find($id);
        return view('mantto.departamento.edit',['departamento' => $departamento]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DepartamentoRequest $request, $id)
    {
        $departamento = departamento::find($id);
        $departamento->departamento = $request->input('departamento');
        $departamento->save();
        Session::flash('message',"<strong>¡Despartameto!</strong> editado correctamente");
        return Redirect::to("/departamento");


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $departamento = departamento::find($id);
        $departamento->delete();

        Session::flash('message',"<strong>¡Departamento!</strong> eliminado correctamente");
        return Redirect::to("/departamento");

    }
}
