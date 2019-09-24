@extends('usuarios.layout')

@section('content')
<div class="contaiber p4">
    <div class='row'>
        <div class="col-md-4">
          <h1>Usuarios</h1>
          <a href="{{ route('usuarios.create')}}">crear usuario</a>
            <div class="card-body">
<table class="table">
  <thead>
    <tr>
      <th scope="col">nombre</th>
      <th scope="col">apellido</th>
      <th scope="col">edad</th>
      <th scope="col">edad</th>
      </tr>
  </thead>
  <tbody>
      @foreach ($usuarios as $user)
    <tr>
      <th scope="row">{{$user->nombre}}</th>
      <td>{{$user->apellido}}</td>
      <td>{{$user->edad}}</td>
      <td>
        <a class="btn btn-danger" href="{{route('usuarios.destroy',$user->id)}}">Eliminar</a>
        <a class="btn btn-info" href="{{route('usuarios.edit',$user->id)}}">Modificar</a>
    </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{$usuarios->links()}}
            </div>
        </div>
@endsection