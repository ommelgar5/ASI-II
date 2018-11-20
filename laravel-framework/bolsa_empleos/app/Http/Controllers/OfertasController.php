<?php

namespace App\Http\Controllers;

use App\oferta_laboral;
use App\area_empresa;
use Illuminate\Http\Request;

class OfertasController extends Controller
{
    public function ofertasArea($area = null){
    	$areas = null;

    	if($area){
    		$areas = area_empresa::find($area);
    	}else{
    		$areas = area_empresa::all();
    	}
    	return view('listado_ofertas',['areas'=>$areas]);
    }
}
