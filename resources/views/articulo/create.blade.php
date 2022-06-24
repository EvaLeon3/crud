@extends('layouts.plantillabase');

@section('contenido')
<h2> CREAR REGISTROS </h2>

<form action="/articulos" method="POST">
    @csrf
    <div class="nb-3">
        <label for="" class="form-label">Código </label>
        <input id="codigo" name="codigo" type="text" class="form-control" tabindex="1">
    </div>
    <div class="nb-3">
        <label for="" class="form-label">Descripción </label>
        <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="2">
    </div>
    <div class="nb-3">
        <label for="" class="form-label">Cantidad </label>
        <input id="cantidad" name="number" type="text" class="form-control" tabindex="3">
    </div>
    <div class="nb-3">
        <label for="" class="form-label">Precio </label>
        <input id="precio" name="number" type="text" class="form-control" tabindex="4">
    </div>
    <a href="/articulos" class="btn btn-secondary" tabindex="5">Cancelar </a>
    <button type="submit" class="bton bton-primary" tabindex="4"> Guardar </button>


</form>

@endsection