<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfertasController extends Controller
{
    public function ofertasArea($area = null){
    	return view('listado_ofertas');
    }
}
