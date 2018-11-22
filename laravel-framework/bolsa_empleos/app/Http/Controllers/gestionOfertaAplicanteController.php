<?php

namespace App\Http\Controllers;

use App\persona;
use App\gestion;
use App\oferta_laboral;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class gestionOfertaAplicanteController extends Controller
{
    //
    public function index(){
    	$persona = persona::where('dui',Auth::user()->dui)->first()->id;
    	$gestiones = gestion::where('persona_id',$persona)->get();
    	return view('usuario.gestion',['gestiones'=>$gestiones]);
    }
}
