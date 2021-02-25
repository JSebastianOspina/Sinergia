@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-end mb-2">
            <a href="{{ url('pacientes/create') }}" class="btn btn-outline-primary">Crear Paciente</a>
        </div>

        <form action="{{ url('pacientes/'.$paciente->id)}}" method="post">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="exampleFormControlSelect1">Tipo de documento</label>
                <select class="form-control" id="exampleFormControlSelect1" name="tipos_documento_id">
                    @foreach ($tipos_documentos as $tipos_documento)
                        <option @if ($tipos_documento->id == $paciente->tipos_documento_id) {{'selected'}} @endif value="{{ $tipos_documento->id }}">{{ $tipos_documento->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="numero_documento">Documento</label>
                <input type="text" class="form-control" id="numero_documento" name="numero_documento" value="{{$paciente->numero_documento}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Género</label>
                <select class="form-control" id="exampleFormControlSelect1" name="genero_id">
                    @foreach ($generos as $genero)

                        <option @if ($genero->id == $paciente->genero_id) {{'selected'}} @endif value="{{ $genero->id }}">{{ $genero->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="nombre1">Nombre 1</label>
                <input type="text" class="form-control" id="nombre1" name="nombre1" value="{{$paciente->nombre1}}">
            </div>

            <div class="form-group">
                <label for="nombre2">Nombre 2</label>
                <input type="text" class="form-control" id="nombre2" name="nombre2" value="{{$paciente->nombre2}}">
            </div>

            <div class="form-group">
                <label for="apellido1">Apellido 1</label>
                <input type="text" class="form-control" id="apellido1" name="apellido1" value="{{$paciente->apellido1}}">
            </div>

            <div class="form-group">
                <label for="apellido2">Apellido 2</label>
                <input type="text" class="form-control" id="apellido2" name="apellido2" value="{{$paciente->nombre2}}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Departamento</label>
                <select class="form-control" id="departamento" name="departamento_id">
                    @foreach ($departamentos as $departamento)
                        <option @if ($departamento->id == $paciente->departamento_id) {{'selected'}} @endif value="{{ $departamento->id }}">{{ $departamento->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1" id="municipio">Municipio</label>
                <select class="form-control" id="municipios" name="municipio_id">
                    <option value="{{ $paciente->municipio_id }}">{{ $paciente->municipio->nombre }}</option>

                </select>
            </div>


            <button type="submit" class="btn btn-primary">Actualizar paciente</button>
        </form>
    </div>
    <script>
        let departamento = document.getElementById('departamento');
        let municipio = document.getElementById('municipios');
        let url = 'http://127.0.0.1:8000';

        departamento.addEventListener('change', getDepartamentos);

        function getDepartamentos() {
            municipio.innerHTML = '';

            axios.get(`${url}/municipios/getByDepartment/${departamento.value}`).then(function(response) {
                console.log(response.data)
                response.data.forEach(function(element) {
                    let option = document.createElement('option');
                    option.appendChild(document.createTextNode(element.nombre));
                    option.value = element.id;
                    municipio.appendChild(option);

                })

            });
        }

    </script>
@endsection
