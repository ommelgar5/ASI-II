@extends('layouts.aplicanteTemplate')

@section('contenido')

	@if( $areas instanceof Illuminate\Database\Eloquent\Collection )
		@foreach($areas as $area)
			@foreach($area->cargos as $cargo)
				@foreach($cargo->ofertas_laboral as $oferta )
					{{ $oferta->titulo }}<br>
				@endforeach
			@endforeach
		@endforeach

	@else
		@foreach($areas->cargos as $cargo)
			@foreach($cargo->ofertas_laboral as $oferta )
				{{ $oferta->titulo }}<br>
			@endforeach
		@endforeach
	@endif

@endsection