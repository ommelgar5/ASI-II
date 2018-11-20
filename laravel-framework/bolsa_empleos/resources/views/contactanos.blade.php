@extends('layouts.registroAplicanteTemplate')
@section('contenido')
<h2 class="text-center">Contactanos</h2>
<p class="text-muted mb-5">Si tienes consulta puede llenar el siguiente formulario y te estaremos respodiente lo mas pronto posible</p>
<form action="#">
  @csrf
  <div class="form-group">
    <label for="name">Nombre y apellido: <strong class="text-danger">*</strong> </label>
    <input type="text"  class="form-control" name="name" id="name">
  </div>
  <div class="form-group">
    <label for="email">Correo: <strong class="text-danger">*</strong> </label>
    <input type="email"  class="form-control" name="email" id="email" placeholder="correo@gmail.com">
  </div>
  <div class="form-group">
    <label for="message">Mensaje: <strong class="text-danger">*</strong> </label>
    <textarea class="form-control" rows="5" id="message" name="message"></textarea>
  </div>
  <button class="btn btn-primary">Enviar</button>
</form>
@endsection