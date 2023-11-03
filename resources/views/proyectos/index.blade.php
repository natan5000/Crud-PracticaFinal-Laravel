@extends('layouts.app')

@section('content')
    <center><img src="{{ asset('img/logo.jpg') }}" width="150"/></center>
    <a href="{{ route('proyectos.create') }}" class="btn btn-primary">Crear Proyecto</a>
    <a href="{{ url('/')}}" class="btn btn-danger">Salir</a>    
    <a href="{{ route('proyectos.report') }}" Target="_blank"><span class="btn material-icons" style="font-size: 43px;">picture_as_pdf</span></a>  
    <table class="table mt-4">
        <thead class="thead-dark">
            <tr>
                <th  scope="col">ID</th>
                <th  scope="col">Nombre del Proyecto</th>
                <th  scope="col">Fuente de Fondos</th>
                <th  scope="col">Monto Planificado</th>
                <th  scope="col">Monto Patrocinado</th>
                <th  scope="col">Mondo Fondos Propios</th>
                <th  scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($proyectos as $proyecto)
                <tr>
                    <td>{{ $proyecto->id }}</td>
                    <td>{{ $proyecto->nombreProyecto }}</td>
                    <td>{{ $proyecto->fuenteFondos }}</td>
                    <td>$ {{ $proyecto->montoPlanificado }}</td>
                    <td>$ {{ $proyecto->montoPatrocinado }}</td>
                    <td>$ {{ $proyecto->montoFondosPropios }}</td>
                    <td>
                        <!-- <a href="{{ route('proyectos.show', $proyecto) }}" class="btn btn-sm btn-info">Ver</a> -->
                        <a href="{{ route('proyectos.edit', $proyecto) }}" class="btn btn-sm btn-success">Editar</a>
                        <form action="{{ route('proyectos.destroy', $proyecto) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

