@extends('layouts.app')
@section('content')
<div class="card" style="width: 36rem;">

  <div class="card-body">
    <h5 class="card-title">Eliminar</h5>
    <form  action="{{ route('vistas.destruir')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre producto:</label>
            <input type="text" id="nombre" name="nombre" class="form-control" required>
        </div>
        
        <button type="submit" class="form-control">Eliminar</button>
    </form>
    @if (session('success'))
    <div class="alert alert-success" role="aler">{{session('success')}}</div>
    @endif
    @if (session('error'))
    <div class="alert alert-success" role="aler">{{session('error')}}</div>
    @endif
  </div>
</div>

@endsection