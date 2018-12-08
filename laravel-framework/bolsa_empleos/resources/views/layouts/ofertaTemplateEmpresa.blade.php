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
         <!-- <span class="badge badge-pill badge-primary">Nuevo</span> -->
       </div>
     </div>
   </div>
  </div>
  <div class="card-body py-2">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-10 p-0">
          <p class="card-text mb-0">{{$oferta->descripcion}}</p>
          <div class="text-right">
            <a href="{{ route('empresa.aplicantes', ['id'=> $oferta->cod_oferta ] ) }}" class="btn btn-primary btn-sm mr-0">Ver detalle</a>
          </div>
        </div>
        <div class="col-md-2 p-1 d-flex justify-content-center mt-3">
          <div class="bg-success text-white rounded-circle d-flex justify-content-center align-items-center" style="width:70px; height: 70px;">{{count($oferta->aplicaciones) }}</div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--End card-->