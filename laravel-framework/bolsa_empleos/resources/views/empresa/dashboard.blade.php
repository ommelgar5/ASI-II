@extends('layouts.empresaTemplate')


@section('titulo','Dashboard')

@section('contenido')
<!--Opciones de ususuario Logueado -->
<ul class="nav nav-tabs mb-3 mt-3">
	<li class="nav-item">
		<a class="nav-link active" href="#"><i class="fas fa-book fa-lg mr-2"></i>Todas</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="#"> <i class="fas fa-plus-circle fa-lg mr-2"></i> Agregar</a>
	</li>
</ul>

<!--BUSCAR -->
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
@endsection