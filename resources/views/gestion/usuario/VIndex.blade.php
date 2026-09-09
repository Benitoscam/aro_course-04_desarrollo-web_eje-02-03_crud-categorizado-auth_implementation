@extends('principal.VPrincipal')
@section('contenido')

<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-users"></i> Gestión de Usuarios</h4>
                </div>
                <div class="card-body">
                    <a href="{{ route('usuarios.create') }}" class="btn btn-primary mb-3">
                        <i class="fas fa-plus"></i> Nuevo Usuario
                    </a>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Rol</th>
                                <th>Creado en</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($usuarios as $usuario)
                            <tr>
                                <td>{{ $usuario->id }}</td>
                                <td>{{ $usuario->name }}</td>
                                <td>{{ $usuario->email }}</td>
                                <td>
                                    @if($usuario->role == 'admin')
                                        <span class="badge bg-danger">Administrador</span>
                                    @else
                                        <span class="badge bg-info">Usuario</span>
                                    @endif
                                </td>
                                <td>{{ $usuario->created_at->format('d/m/Y') }}</td>
                                <td>
                                    <a href="{{ route('usuarios.edit', $usuario->id) }}">
                                        <img src="{{asset('img/editar.png')}}"
                                    alt=""></a> &nbsp;
                                    <a href="{{ route('usuarios.destroy', $usuario->id) }}" onclick="return confirm('¿Está seguro de eliminar este usuario?')">
                                        <img src="{{asset('img/eliminar.png')}}" alt="">
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection