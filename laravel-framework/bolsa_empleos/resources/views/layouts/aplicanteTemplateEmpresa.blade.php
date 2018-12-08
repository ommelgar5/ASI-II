<!--start -->
<a href="{{ route('empresa.curriculum', ['id'=> $aplicante->persona->id ] ) }}" class="link">
  <div class="media border rounded shadow p-3 mb-3">
    @if($aplicante->persona->usuarios->first()->avatar)
      <img src="/storage/public/aplicantes_avatar/{{ $aplicante->persona->usuarios->first()->avatar }}" alt="user.png" class="mr-3 mt-3 rounded-circle" style="width:60px;">
    @else
      <img class="card-img-top rounded" src="/assets/img/users/user.png" alt="user.png" style="max-width: 150px">
    @endif
    
    <div class="media-body">
      <h4>{{ $aplicante->persona->nombre }} {{ $aplicante->persona->apellido }}</h4>
      <p class="m-0">{{ $aplicante->persona->direccion[0]->lugar }}</p>
      <p class="m-0"> Municipio: {{ $aplicante->persona->direccion[0]->municipio->municipio }}</p>
      <p class="m-0">Departamento: {{ $aplicante->persona->direccion[0]->municipio->departamento->departamento }}</p>
    </div>
  </div>
</a>
<!--End-->