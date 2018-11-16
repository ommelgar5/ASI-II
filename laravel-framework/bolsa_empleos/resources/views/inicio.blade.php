@extends('layouts.aplicanteTemplate')


@section('contenido')

<!--Filtros -->
<form action="">
  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text bg-primary text-white"><i class="fas fa-search"></i></span>
    </div>
    <input type="password" class="form-control" placeholder="Buscar">
  </div>
</form>

<h5>Fitros de busqueda</h5>

<div id="accordion" class="mb-2">
  <div class="card">
    <div class="card-header py-1">
      <div class="row d-flex justify-content-between align-items-center ">
        <a class="card-link col-8 col-md-10 " data-toggle="collapse" href="#collapseOne">
          Filtros de búsqueda
        </a>
      </div>
    </div>
    
    <div id="collapseOne" class="collapse px-2" data-parent="#accordion">
      <form action="#">
        <div class="form-group">
          <label for="area">Area de la empresa</label>
          <select class="form-control" id="area">
            <option value="1">Informática | Internet</option>
            <option value="2">Mercadeo | Ventas</option>
            <option value="3">Recursos Humanos</option>
            <option value="4">Operaciones | Logística</option>
          </select>
        </div>
        <div class="form-group">
          <label for="cargo">Cargo empresa</label>
          <select class="form-control" id="cargo">
            <option value="1">Gerente Comercial</option>
            <option value="2">Vendedor</option>
            <option value="3">Programador Senior</option>
            <option value="4">Administrador de Base de Datos</option>
          </select>
        </div>
        <div class="form-group">
          <label for="salario">Rango de sueldo</label>
          <select class="form-control" id="salario">
            <option value="1">$0 - $300</option>
            <option value="2">$301 - $600</option>
            <option value="3">$601 - $1000</option>
            <option value="4">$1001 en adelante</option>
          </select>
        </div>
        <div class="text-right mb-2">
          <button class="btn btn-primary">Buscar</button>
        </div>
      </form>
    
    </div>
  </div>
</div>

<!--start card-->
<div class="card mb-2">
  <div class="card-header py-1 px-0">
   <div class="container-fluid">
     <div class="row">
       <div class="col-lg-8">
         <p class="text-center text-lg-left m-0">Ejecutivo de ventas lo mas pro del mundo </p>
       </div>
       <div class="col-lg-4 text-center">
         <span class="text-muted mr-3"> Fecha: 11/12/2018</span>
         <span class="badge badge-pill badge-primary">Nuevo</span>
       </div>
     </div>
   </div>
  </div>
  <div class="card-body py-2 px-0">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-2 text-center">
          <img src="assets/img/logos/claro.png" alt="claro.png" width="100">
        </div>
        <div class="col-lg-10">
          <p class="card-text ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid beatae cumque
                               dicta, doloremque doloribus, illum maiores nisi nobis odit perferendis quam quas
                               quia ratione repellendus sint tempora tempore voluptas voluptates?</p>
          <div class="text-right">
            <a href="#" class="btn btn-primary btn-sm mr-0">Ver oferta</a>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>
<!--End card-->

<div class="card mb-2">
  <div class="card-header py-1 px-0">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-8">
          <p class="text-center text-lg-left m-0">Ejecutivo de ventas lo mas pro del mundo </p>
        </div>
        <div class="col-lg-4 text-center">
          <span class="text-muted mr-3"> Fecha: 11/12/2018</span>
          <span class="badge badge-pill badge-primary">Nuevo</span>
        </div>
      </div>
    </div>
  </div>
  <div class="card-body py-2 px-0">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-2 text-center">
          <img src="assets/img/logos/claro.png" alt="claro.png" width="100">
        </div>
        <div class="col-lg-10">
          <p class="card-text ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid beatae cumque
                                dicta, doloremque doloribus, illum maiores nisi nobis odit perferendis quam quas
                                quia ratione repellendus sint tempora tempore voluptas voluptates?</p>
          <div class="text-right">
            <a href="#" class="btn btn-primary btn-sm mr-0">Ver oferta</a>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<div class="card mb-2">
  <div class="card-header py-1 px-0">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-8">
          <p class="text-center text-lg-left m-0">Ejecutivo de ventas lo mas pro del mundo </p>
        </div>
        <div class="col-lg-4 text-center">
          <span class="text-muted mr-3"> Fecha: 11/12/2018</span>
          <span class="badge badge-pill badge-primary">Nuevo</span>
        </div>
      </div>
    </div>
  </div>
  <div class="card-body py-2 px-0">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-2 text-center">
          <img src="assets/img/logos/claro.png" alt="claro.png" width="100">
        </div>
        <div class="col-lg-10">
          <p class="card-text ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid beatae cumque
                                dicta, doloremque doloribus, illum maiores nisi nobis odit perferendis quam quas
                                quia ratione repellendus sint tempora tempore voluptas voluptates?</p>
          <div class="text-right">
            <a href="#" class="btn btn-primary btn-sm mr-0">Ver oferta</a>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<div class="card mb-2">
  <div class="card-header py-1 px-0">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-8">
          <p class="text-center text-lg-left m-0">Ejecutivo de ventas lo mas pro del mundo </p>
        </div>
        <div class="col-lg-4 text-center">
          <span class="text-muted mr-3"> Fecha: 11/12/2018</span>
          <span class="badge badge-pill badge-primary">Nuevo</span>
        </div>
      </div>
    </div>
  </div>
  <div class="card-body py-2 px-0">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-2 text-center">
          <img src="assets/img/logos/claro.png" alt="claro.png" width="100">
        </div>
        <div class="col-lg-10">
          <p class="card-text ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid beatae cumque
                                dicta, doloremque doloribus, illum maiores nisi nobis odit perferendis quam quas
                                quia ratione repellendus sint tempora tempore voluptas voluptates?</p>
          <div class="text-right">
            <a href="#" class="btn btn-primary btn-sm mr-0">Ver oferta</a>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

@endsection