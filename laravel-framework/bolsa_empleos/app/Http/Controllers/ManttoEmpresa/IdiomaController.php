<?php

namespace App\Http\Controllers\ManttoEmpresa;

use App\Http\Requests\ManttoUser\IdiomaResquest;
use App\idioma;
use App\nivel;
use App\oferta_idioma;
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
    public function index($id)
    {
        $idiomas = oferta_idioma::where('cod_oferta',$id)->get();

        foreach ($idiomas as $idioma){
            $idioma->idioma;
            $idioma->nivel;
        }
//        return response()->json($idiomas);

        return view('empresa.ofertas.idiomas.index',['idiomas'=>$idiomas,'idOferta'=>$id]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $idiomas = idioma::all();
        $niveles = nivel::all();

        return view('empresa.ofertas.idiomas.create',['idiomas'=>$idiomas,'niveles'=>$niveles,'idOferta'=>$id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IdiomaResquest $request)
    {
        $idOferta = $request->input('cod_oferta');
        $ofertaIdioma = new oferta_idioma();
        $ofertaIdioma->fill($request->all());
        $success = $ofertaIdioma->save();

        if($success){
            Session::flash('message',"<strong>¡Idioma!</strong> agregado correctamente");
            return Redirect::to("/editIdi/$idOferta");
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
        $idiomaOfer = oferta_idioma::find($id);
        $idiomas = idioma::all();
        $niveles = nivel::all();

//        return response()->json($experiencia);

        return view('empresa.ofertas.idiomas.edit',['idiomaOfer'=>$idiomaOfer,'idiomas'=>$idiomas,'niveles'=>$niveles]);
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
        $ofertaIdioma = oferta_idioma::find($id);
        $ofertaIdioma->fill($request->all());
        $ofertaIdioma->save();
        Session::flash('message',"<strong>¡Idioma!</strong> editado correctamente");
        return Redirect::to("/editIdi/$ofertaIdioma->cod_oferta");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ofertaIdioma = oferta_idioma::find($id);
        $ofertaIdioma->delete();

        Session::flash('message',"<strong>¡Idioma!</strong> eliminada correctamente");
        return Redirect::to("/editHab/$ofertaIdioma->cod_oferta");
    }
}
