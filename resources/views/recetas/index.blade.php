@extends('layouts.app')
@section('content')
<div class="container">
    <div class="mb-3 d-flex align-items-center justify-content-between">
        <h1 class="">Administra tus recetas</h1>
        <a href="{{route('recetas.create')}}" class="btn btn-warning">Agrega tu receta</a>
    </div>
    <div class="p-5">
    <table class="table table-hover">
        <thead class="bg-danger text-light">
            <tr>
                <th>Título</th>
                <th>Categoría</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($recetas as $receta )
            <tr>
                <td>{{$receta->titulo}}</td>
                <td>{{$receta->categoria->nombre}}</td>
                <td>
                    <a href="">Editar</a>
                    <a href="">Eliminar</a>
                    <a href="{{route('recetas.show',$receta->id)}}">Ver</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</div>
@endsection

