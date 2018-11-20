<?php

namespace App\Http\Controllers;

use App\area_empresa;
use App\oferta_laboral;
use Illuminate\Http\Request;

class OfertasController extends Controller
{
    public function ofertasArea($area = null){
    	
    	if($area){
    		$areas = area_empresa::find($area);
    	}else{
    		$areas = area_empresa::all();
    	}

    	return view('listado_ofertas',['areas'=>$areas]);
    }

    public function ofertaDetalle($id){
    	$oferta = oferta_laboral::find($id);
    	return view('ofertaDetalle',['oferta' => $oferta]);
    }
}
