<?php

namespace App\Http\Controllers\ManttoUser;

use App\Http\Requests\ManttoUser\IdiomaResquest;
use App\idioma;
use App\idioma_solicitante;
use App\nivel;
use App\persona;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class IdiomaUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $persona = persona::where('dui',Auth::user()->dui)->first()->id;
        $idiomas = idioma_solicitante::where('persona_id',$persona)->get();

        foreach ($idiomas as $idioma){
            $idioma->idioma;
            $idioma->nivel;
        }

        return view('usuario.idiomas.index', ['data'=> $idiomas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'idiomas' => idioma::all(),
            'niveles' => nivel::all()
        ];

        return view('usuario.idiomas.create',['data' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IdiomaResquest $request)
    {
        $idioma = new idioma_solicitante();
        $idioma->persona_id = persona::where('dui',Auth::user()->dui)->first()->id;
        $idioma->cod_idioma = $request->input('cod_idioma');
        $idioma->cod_nivel = $request->input('cod_nivel');
        $success = $idioma->save();

        if($success){
            Session::flash('message',"<strong>¡Idioma!</strong> agregado correctamente");
            return Redirect::to('/editIdioma');
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
        $idiomaSolic = idioma_solicitante::find($id);
        $idiomas = idioma::all();
        $niveles = nivel::all();

        return view('usuario.idiomas.edit',['idiomaSolic'=>$idiomaSolic,'idiomas'=>$idiomas,'niveles'=>$niveles]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(IdiomaResquest $request, $id)
    {
        $idioma = idioma_solicitante::find($id);
        $idioma->fill($request->all());
        $idioma->save();
        Session::flash('message',"<strong>¡Idioma!</strong> editado correctamente");
        return Redirect::to('/editIdioma');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $idioma = idioma_solicitante::find($id);
        $idioma->delete();

        Session::flash('message',"<strong>¡Idioma!</strong> eliminado correctamente");
        return Redirect::to('/editIdioma');
    }
}
