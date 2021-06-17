@extends('adminlte::page')

@section('title', 'ENASA | TRABAJADORES')

@section('content_header')
    <div class="container m-2">
        <div class="card elevation-4 col-md-12 col-sm-12" style="border-radius: 0.95rem">
            <div class="card-body">
                <h3 class="text-blue">Lista de trabajadores</h3>
            </div>
        </div>
    </div>
@stop

@section('css')

@stop
@section('content')

    @include('sweetalert::alert')

    <div class="container">
        @livewire('show-empleado')
    </div>
@stop

@section('js')
    <script src=" {{ asset('vendor/sweetalert-eliminar.js') }} "></script>
@stop
