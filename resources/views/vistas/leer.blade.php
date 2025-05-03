@extends('layouts.app')
@section('content')
<h1>Listado</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nombres</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Autor</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        @foreach ($productos as $produc)
        <td>{{$produc->nombre}}</td>
        <td>{{$produc->descripcion}}</td>
        <td>{{$produc->autor}}</td>
        <td>
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal{{ $produc->id }}">
    Actualizar
</button>

        @include('vistas.actualizar')
        </td>
    </tr>
    @endforeach
  </tbody>
</table>
@if (session('success'))
    <div class="alert alert-success" role="aler">{{session('success')}}</div>
    @endif

@endsection