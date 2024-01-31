@extends('home')

@section('content')
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <br>
            <h2>Lista de clientes</h2>
            <br>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
                Nuevo
            </button>
            <div class='table-responsive mt-2'>
                <table class="table">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clientes as $value)
                            <tr>
                                <td scope="row">{{ $value->id }}</td>
                                <td>{{ $value->nombre }}</td>
                                <td>{{ $value->telefono }}</td>
                                <td>{{ $value->correo }}</td>
                                <td>
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                        data-bs-target="#edit{{ $value->id }}">
                                        Editar
                                    </button>
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#delete{{ $value->id }}">
                                        Eliminar
                                    </button>
                                </td>
                            </tr>
                            @include('clientes.info')
                        @endforeach
                    </tbody>
                </table>
            </div>
            @include('clientes.create')
        </div>
        <div class="col-md-2"></div>
    </div>
@endsection
