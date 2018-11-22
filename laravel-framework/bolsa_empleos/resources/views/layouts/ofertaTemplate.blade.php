<!--start card-->
<div class="card mb-2">
  <div class="card-header py-1 px-0">
   <div class="container-fluid">
     <div class="row">
       <div class="col-lg-8">
         <p class="text-center text-lg-left m-0">{{$oferta->titulo}}</p>
       </div>
       <div class="col-lg-4 text-center">
         <span class="text-muted mr-3"> Fecha: {{ date('Y-m-d', strtotime($oferta->fecha)) }}</span>
         <span class="badge badge-pill badge-primary">Nuevo</span>
       </div>
     </div>
   </div>
  </div>
  <div class="card-body py-2 px-0">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-2 text-center">
          <img src="/storage/public/empresas_logo/{{$oferta->empresa->logo}}" alt="{{$oferta->empresa->logo}}" width="100">
        </div>
        <div class="col-lg-10">
          <p class="card-text ">{{$oferta->descripcion}}</p>
          <div class="text-right">
            <a href="{{ route('oferta', ['id'=> $oferta->cod_oferta ] ) }}" class="btn btn-primary btn-sm mr-0">Ver oferta</a>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>
<!--End card-->