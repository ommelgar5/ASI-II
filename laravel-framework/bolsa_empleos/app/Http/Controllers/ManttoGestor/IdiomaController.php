<?php

namespace App\Http\Controllers\ManttoGestor;

use App\Http\Requests\ManttoGestor\IdiomaRequest;
use App\Http\Requests\ManttoUser\IdiomaResquest;
use App\idioma;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class IdiomaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $idiomas = idioma::paginate(15);
        return view('mantto.idioma.index',['idiomas'=>$idiomas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mantto.idioma.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IdiomaRequest $request)
    {
        $idioma = new idioma();
        $idioma->fill($request->all());
        $success = $idioma->save();

        if($success){
            Session::flash('message',"<strong>¡Idioma!</strong> agregado correctamente");
            return Redirect::to("/idioma");
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
        $idioma = idioma::find($id);

        if($idioma){
            return view('mantto.idioma.edit',['idioma' => $idioma]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(IdiomaRequest $request, $id)
    {
        $idioma = idioma::find($id);
        $idioma->idioma = $request->input('idioma');
        $idioma->save();
        Session::flash('message',"<strong>¡Idioma!</strong> editado correctamente");
        return Redirect::to("/idioma");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $idioma = idioma::find($id);
        $idioma->delete();

        Session::flash('message',"<strong>¡Idioma!</strong> eliminado correctamente");
        return Redirect::to("/idioma");
    }
}
