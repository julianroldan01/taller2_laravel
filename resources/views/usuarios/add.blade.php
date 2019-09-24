@extends('usuarios.layout')

@section('content')
<div class="contaiber p4">
    <div class='row'>
        <div class="col-md-12">
        <form action="{{route('usuarios.store')}}" method="POST">
            @csrf
            <div class="label">nombre</div>
            <input class="form-control" type="text" name="nombre">
            <div class="label">apellido</div>
            <input class="form-control" type="text" name="apellido">
            <div class="label">edad</div>
            <input class="form-control" type="text" name="edad">

            <button class="btn btn-success btn-block"type="submit">registrar</button>
            

        </form>
            </div>
        </div>
@endsection