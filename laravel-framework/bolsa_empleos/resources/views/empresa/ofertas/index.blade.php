@extends('layouts.adminEmpresa')

@include('alerts.sucess')

@section('content')
    <div class="container" style="max-width: 80%">
        <h2 class="text-muted">Oferta publicadas</h2>

        @foreach($ofertas as $oferta)
            <div class="panel panel-primary mb-2 text- mb-3">
                <div class="panel-heading py-1" >
                    <div class="row p-0 m-0">
                        <span class="col-xs-9">{{ $oferta->titulo }} {{ $oferta->fecha }}</span>
                        <a href="/editOferta/{{ $oferta->cod_oferta }}/edit" style="color: white;" class="col-xs-1 text-center"><i class="fa fa-pencil-square fa-2x" aria-hidden="true"></i></a>
                        {!!Form::open(['route'=>['editOferta.destroy',$oferta->cod_oferta],'method'=>'DELETE','class'=>'text-center col-xs-2 p-0'])!!}
                        {!!Form::submit('Eliminar',['class'=>'btn btn-danger btn-sm'])!!}
                        {!!Form::close()!!}
                    </div>
                </div>
                <div class="panel-body">
                    <div>Descripcion: </div>
                    <p class="text-muted">{{ $oferta->descripcion }}</p>
                    <div>Número de plazas:  <span class="text-muted">{{ $oferta->numero_plaza }}</span></div>
                    <div>Contrato: <span class="text-muted">{{ $oferta->tipo_contrato->contrato }}</span></div>
                    <div>Años Experiencia: <span class="text-muted">{{ $oferta->a_experiencia->a_experiecia }}</span></div>
                    <div>Genero: <span class="text-muted">{{ $oferta->genero->genero }}</span></div>
                    <div>Edad minima: <span class="text-muted">{{ $oferta->edad_min }}</span></div>
                    <div>Edad maxima: <span class="text-muted">{{ $oferta->edad_max }}</span></div>
                    <div>Salario minimo: <span class="text-muted">${{ $oferta->salario_min }}</span></div>
                    <div>Salario maximo: <span class="text-muted">${{ $oferta->salario_max }}</span></div>

                    @if($oferta->vehiculo)
                        <div>Vehículo: <span class="text-muted">Si</span></div>
                    @else
                        <div>Vehículo: <span class="text-muted">No</span></div>
                    @endif
                    <div>Tipo de licencia: <span class="text-muted">{{ $oferta->licencia->tipo }}</span></div>
                </div>
            </div>
        @endforeach
    </div>

@endsection