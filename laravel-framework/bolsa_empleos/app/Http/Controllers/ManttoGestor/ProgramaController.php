<?php

namespace App\Http\Controllers\ManttoGestor;

use App\Http\Requests\ManttoGestor\ProgramaRequest;
use App\programa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ProgramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programas = programa::paginate(15);
        return view('mantto.programa.index',['programas'=>$programas]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mantto.programa.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProgramaRequest $request)
    {
        $programa = new programa();
        $programa->fill($request->all());
        $success = $programa->save();

        if($success){
            Session::flash('message',"<strong>¡Programa!</strong> agregado correctamente");
            return Redirect::to("/programa");
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
        $programa = programa::find($id);
        return view('mantto.programa.edit',['programa' => $programa]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProgramaRequest $request, $id)
    {
        $programa = programa::find($id);
        $programa->programa = $request->input('programa');
        $programa->save();
        Session::flash('message',"<strong>¡Programa!</strong> editado correctamente");
        return Redirect::to("/programa");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $programa = programa::find($id);
        $programa->delete();

        Session::flash('message',"<strong>¡Programa!</strong> eliminado correctamente");
        return Redirect::to("/programa");
    }
}
