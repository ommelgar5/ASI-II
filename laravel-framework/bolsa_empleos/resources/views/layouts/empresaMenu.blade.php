<!--Opciones de ususuario Logueado -->
<ul class="nav nav-tabs mb-3 mt-3">
	<li class="nav-item">
		<a class="nav-link {{ isActiveRoute('empresa.dashboard') }} " href="{{ route('empresa.dashboard') }}"><i class="fas fa-book fa-lg mr-2"></i>Todas</a>
	</li>
	<li class="nav-item">
		<a class="nav-link {{ isActiveRoute('empresa.nuevaoferta') }}" href="{{ route('empresa.nuevaoferta') }}"> <i class="fas fa-plus-circle fa-lg mr-2"></i> Agregar</a>
	</li>
</ul>