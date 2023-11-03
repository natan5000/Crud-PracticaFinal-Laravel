@extends('layouts.app')

@section('content')
    <h2>Editar Proyecto</h2>
    <form action="{{ route('proyectos.update', $proyecto) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="col-md-3 mb-3">
            <label for="nombreProyecto" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombreProyecto" name="nombreProyecto" value="{{ $proyecto->nombreProyecto }}" required>
        </div>
        <div class="col-md-3 mb-3">
            <label for="fuenteFondos" class="form-label">Fuente Fondos</label>
            <input type="text" class="form-control" id="fuenteFondos" name="fuenteFondos" value="{{ $proyecto->fuenteFondos }}" required>
        </div>
        <div class="col-md-3 mb-3">
            <label for="montoPlanificado" class="form-label">Monto Planificado</label>
            <input type="text" class="form-control" id="montoPlanificado" name="montoPlanificado" value="{{ $proyecto->montoPlanificado }}" required>
        </div>
        <div class="col-md-3 mb-3">
            <label for="montoPatrocinado" class="form-label">Monto Patrocinado</label>
            <input type="text" class="form-control" id="montoPatrocinado" name="montoPatrocinado" value="{{ $proyecto->montoPatrocinado }}" required>
        </div>
        <div class="col-md-3 mb-3">
            <label for="montoFondosPropios" class="form-label">Monto Fondos Propios</label>
            <input type="text" class="form-control" id="montoFondosPropios" name="montoFondosPropios" value="{{ $proyecto->montoFondosPropios }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('proyectos.index')}}" class="btn btn-danger">Cancelar</a>
    </form>
@endsection