@extends('layouts.app')
@section('content')
    <h2>Crear Proyecto</h2>
    <form class="form-center" action="{{ route('proyectos.store') }}" method="POST">
        @csrf
        <label for="nombreProyecto" class="form-label">Nombre</label>
        <div class="col-md-3 mb-3">
            <input type="text" class="form-control" id="nombreProyecto" name="nombreProyecto" required>
        </div>
        <div class="col-md-3 mb-3">
            <label for="fuenteFondos" class="form-label">Fuente Fondos</label>
            <input type="text" class="form-control" id="fuenteFondos" name="fuenteFondos" required></textarea>
        </div>
        <div class="col-md-3 mb-3">
            <label for="montoPlanificado" class="form-label">Monto Planificado</label>
            <input type="number" class="form-control" id="montoPlanificado" name="montoPlanificado" required></textarea>
        </div>
        <div class="col-md-3 mb-3">
            <label for="montoPatrocinado" class="form-label">Monto Patrocinado</label>
            <input type="number" class="form-control" id="montoPatrocinado" name="montoPatrocinado" required></textarea>
        </div>
        <div class="col-md-3 mb-3">
            <label for="montoPropios" class="form-label">Monto Fondos Propios</label>
            <input type="number" class="form-control" id="montoFondosPropios" name="montoFondosPropios" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{route('proyectos.index')}}" class="btn btn-danger">Cancelar</a>
    </form>
@endsection