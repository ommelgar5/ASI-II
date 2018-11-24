<?php

namespace App\Http\Controllers;

use App\area_empresa;
use App\oferta_laboral;
use App\Persona;
use App\gestion;
use App\cargo_empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class OfertasController extends Controller
{
    public function ofertasArea($area = null){
    	
    	if($area){
    		$ofertas = oferta_laboral::whereHas('cargo_empresa',function($q) use ($area){
    			$q->whereHas('area_empresa',function($t) use ($area){
    				$t->where('cod_area',$area);
    			});
    		})->where('isActive',1)->where('fechaLimite','>=', today()->toDateString() )->get();
    		// $areas = area_empresa::find($area);
    	}else{
    		$ofertas = oferta_laboral::where('isActive',1)->where('fechaLimite','>=', today()->toDateString() )->get();
    	}

    	$cargos = cargo_empresa::where('isActive',1)->get();

    	return view('listado_ofertas',['ofertas'=>$ofertas, 'cargos' => $cargos]);
    }

    public function ofertaDetalle($id){
    	$oferta = oferta_laboral::find($id);
    	return view('ofertaDetalle',['oferta' => $oferta]);
    }

    public function inicio(){
    	$ofertas = oferta_laboral::where('isActive',1)->where('fechaLimite','>=', today()->toDateString())->get();
    	$cargos = cargo_empresa::where('isActive',1)->get();
    	return view('inicio',['ofertas' => $ofertas, 'cargos' => $cargos]);
    }

    public function aplicarOferta($id){
    	$persona = Persona::where('dui',Auth::user()->dui)->first()->id;
    	$gestion = gestion::where(['cod_oferta'=>$id , 'persona_id'=>$persona])->first();

    	if(! $gestion){
    		$gestion = new gestion;
	    	$gestion->persona_id = $persona;
	    	$gestion->cod_oferta = $id;
	    	$gestion->cod_estado_gestion = 1;
	    	$gestion->save();
    	}
    	
    	return redirect()->route('gestion');
    }
}
