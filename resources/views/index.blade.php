@extends('layouts.base')

@section('title')
    Libro de Visitas
@endsection

@section('styles')
    {{-- <style></style> --}}
@endsection


@section('content')
    {{-- success message --}}
    @if (session('success'))
        <div class="row">
            <div class="col s12">
                <div class="card green lighten-2">
                    <div class="card-content white-text">
                        <span class="card-title">{{ session('success') }}</span>
                    </div>
                </div>
            </div>
        </div>
    @endif
    {{-- success message --}}

    {{-- Error Messages --}}
    @if ($errors->any())
        <div class="row">
            <div class="col s12">
                <div class="card red lighten-2">
                    <div class="card-content white-text">
                        <span class="card-title">¡Ups! Hay errores en el formulario:</span>
                        <ul>
                            <!-- Mostrar cada error -->
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    @endif
    {{-- Error Messages --}}
    <form action="{{ route('guests.store') }}" method="POST">
        @csrf

        <div class="input-field col s3">
            <i class="material-icons prefix">account_circle</i>
            <label for="name">Nombres</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required>
        </div>

        <div class="input-field col s3">
            <i class="material-icons prefix">account_circle</i>
            <label for="lastname">Apellidos</label>
            <input type="text" name="lastname" id="lastname" value="{{ old('lastname') }}" required>
        </div>

        <div class="input-field col s6">
            <i class="material-icons prefix">comment</i>
            <label for="subject">Motivo</label>
            <input type="text" name="subject" id="subject" value="{{ old('subject') }}" required>
        </div>

        <div class="row">
            <div class="col s12">
                <button class="waves-effect waves-light btn">
                    <i class="material-icons left">save</i>
                    Registrar
                </button>
            </div>
        </div>
    </form>
    <hr>

    <div class="row">
        <div class="col s12">
            <table class="striped" id="table" name="table">
                <caption>Listado de Visitantes de Hoy: {{ now()->format('Y/m/d') }} </caption>
                <thead>
                    <tr>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Movivo</th>
                        <th>Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($guests as $guest)
                        <tr>
                            <td>{{ $guest->name }}</td>
                            <td>{{ $guest->lastname }}</td>
                            <td>{{ $guest->subject }}</td>
                            <td>{{ $guest->created_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready( function () {
    $('#table').DataTable();
} );
    </script>
@endsection
