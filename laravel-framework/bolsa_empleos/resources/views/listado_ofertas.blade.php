@extends('layouts.aplicanteTemplate')

@section('contenido')

	@include('layouts.filtroTemplate',['cargos'=>$cargos])


	@if( $areas instanceof Illuminate\Database\Eloquent\Collection )
		@foreach($areas as $area)
			@foreach($area->cargos as $cargo)
				@foreach($cargo->ofertas_laboral as $oferta )
					
					@include('layouts.ofertaTemplate', ['oferta' => $oferta])

					
				@endforeach
			@endforeach
		@endforeach

	@else
		@foreach($areas->cargos as $cargo)
			@foreach($cargo->ofertas_laboral as $oferta )

				@include('layouts.ofertaTemplate', ['oferta' => $oferta])

			@endforeach
		@endforeach
	@endif

@endsection