@extends('layouts.aplicanteTemplate')

@section('contenido')
	@foreach($gestiones as $gestion)
		@include('layouts.ofertaGestion',['gestion'=>$gestion])
	@endforeach
@endsection