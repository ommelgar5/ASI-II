<?php

namespace App\Http\Controllers;

use App\departamento;
use App\municipio;
use Illuminate\Http\Request;

class CommonController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function obtenerMunicipios($id)
    {
        if($id == 0 ){
            $municipios = municipio::all();
        }else{
            $municipios = departamento::find($id)->municipios->where('isActive',1);
        }
        
        return response()->json($municipios);
    }

}
