@extends('layouts.app')
@section('content')
    <div class="container">
        @if(Session::get('success'))
        <div class="alert alert-success" role="alert">
            {{Session::get('success')}}
          </div>
        @endif
        
        <div class="d-flex justify-content-end mb-2">
            <a href="{{ url('pacientes/create') }}" class="btn btn-outline-primary">Crear Paciente</a>
        </div>
        <div class="table-responsive">

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Documento</th>
                        <th scope="col">Nombre 1</th>
                        <th scope="col">Nombre 2</th>
                        <th scope="col">Apellido 1</th>
                        <th scope="col">Apellido 2</th>
                        <th scope="col">Departamento</th>
                        <th scope="col">Municipio</th>
                        <th scope="col">Accion</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($pacientes as $paciente)
                        <tr>
                            <td>{{ $paciente->numero_documento }}</th>
                                <td><a href="{{url('pacientes/'.$paciente->id.'/edit')}}">{{ $paciente->nombre1 }}</a></td>
                            <td>{{ $paciente->nombre2 }}</td>
                            <td>{{ $paciente->apellido1 }}</td>
                            <td>{{ $paciente->apellido2 }}</td>
                            <td>{{ $paciente->departamento->nombre }}</td>
                            <td>{{ $paciente->municipio->nombre }}</td>
                            <td>
                                <form action="{{url('pacientes/'.$paciente->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Borrar</button>
                                </form>
                            </td>

                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
