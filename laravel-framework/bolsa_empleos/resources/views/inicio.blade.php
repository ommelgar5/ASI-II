@extends('layouts.aplicanteTemplate')

@section('contenido')

  @include('layouts.filtroTemplate',['cargos' => $cargos])

  @foreach($ofertas as $oferta)
    @include('layouts.ofertaTemplate',['oferta' => $oferta])
  @endforeach

@endsection