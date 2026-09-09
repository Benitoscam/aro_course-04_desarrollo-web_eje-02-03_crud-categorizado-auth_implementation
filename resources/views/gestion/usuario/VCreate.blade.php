@extends('principal.VPrincipal')

@section('contenido')

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-user-plus"></i> Registrar Nuevo Usuario</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('usuarios.store') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-form-label">Nombre:</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-form-label">Email:</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="row mb-3">
                            <label for="password" class="col-form-label">Contraseña:</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <div class="row mb-3">
                            <label for="password_confirmation" class="col-form-label">Confirmar Contraseña:</label>
                            <input type="password" name="password_confirmation" class="form-control" required>
                        </div>
                        <div class="row mb-3">
                            <label for="role" class="col-form-label">Rol:</label>
                            <select name="role" class="form-control" required>
                                <option value="usuario">Usuario</option>
                                <option value="admin">Administrador</option>
                            </select>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-check"></i> Registrar
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