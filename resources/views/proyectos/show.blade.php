@extends('layouts.app')

@section('content')
    <h2>{{ $proyecto->nombreProyecto }}</h2>
    <p>{{ $proyecto->fuenteFondos }}</p>
    <a href="{{ route('proyectos.edit', $proyecto) }}" class="btn btn-warning">Editar</a>
@endsection