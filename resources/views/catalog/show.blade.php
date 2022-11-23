@extends('layouts.master')
@section('title', 'Ver película')
@section('content')

    <div class="row">
        <div class="col-sm-4">
            <img src="{{$pelicula->poster}}" alt="">
        </div>
        <div class="col-sm-8">
            <h3>{{$pelicula->title}}</h3>
            <h5>Año: {{$pelicula->year}}</h5>
            <h5>Director: {{$pelicula->director}}</h5>
            <p><strong>Resumen: </strong>{{$pelicula->synopsis}}</p>
            <spam><strong>Estado: </strong></spam>
            @if($pelicula->rented)
                <spam>Pelicula actualmente alquilada</spam><p></p>
                <a class="btn btn-danger">Devolver pelicula</a>
            @else
                <spam>Pelicula disponible</spam><p></p>
                <a class="btn btn-primary">Alquilar pelicula</a>
            @endif
            <a class="btn btn-warning" href="/catalog/edit/{{$pelicula->id}}">Editar pelicula</a>
            <a type="button" class="btn btn-dark" href="/catalog">Volver al listado</a>
            <form action="{{ route('movie.destroy', $pelicula) }}" method="POST">

             @csrf

            @method('DELETE')

            <button class=" mt-4 btn btn-danger" type="submit" rel="tooltip" >Eliminar</button>

        </form>
        </div>
    </div>
@stop