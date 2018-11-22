@extends('layouts.aplicanteTemplate')

@section('contenido')
	@foreach($gestiones as $gestion)
		@include('layouts.ofertaTemplate',['oferta'=>$gestion->oferta_laboral])
	@endforeach
@endsection