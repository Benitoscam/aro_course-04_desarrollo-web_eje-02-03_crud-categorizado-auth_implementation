@extends('principal.VPrincipal')

@section('contenido')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-user-edit"></i> Editar Usuario</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('usuarios.update', $usuario->id ) }}">
                        @csrf @method('PUT')
                        <input type="hidden" name="id" value="{{ $usuario->id }}">
                        <div class="row mb-3">
                            <label for="name" class="col-form-label">Nombre:</label>
                            <input type="text" name="name" class="form-control" value="{{ $usuario->name }}" required>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-form-label">Email:</label>
                            <input type="email" name="email" class="form-control" value="{{ $usuario->email }}" required>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-check"></i> Actualizar
                                </button>
                                <a href="{{ route('usuarios.index') }}" class="btn btn-link">Cancelar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection