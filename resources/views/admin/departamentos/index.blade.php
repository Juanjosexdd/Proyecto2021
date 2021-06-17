@extends('adminlte::page')

@section('title', 'ENASA | DEPARTAMENTOS')

@section('content_header')

    <div class="container m-3">
        <div class="card elevation-4 col-md-12 col-sm-12" style="border-radius: 0.95rem">
            <div class="card-body">
                <h3 class="text-blue">Lista de departamento</h3>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href=" {{ asset('vendor/cards.css') }} ">

@stop
@section('content')

    @include('sweetalert::alert')

    <div class="container">
        @livewire('show-departamento')
    </div>
@stop

@section('footer')
<h5 class="text-center"><a href="https://github.com/Juanjosexdd/proyecto2021"  target="_blank">
    ENASA - UPTP "JJ MONTILLA"</a></h5>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/sweetalert2.min.css') }}">

@stop

@section('js')
    <script src="{{asset('vendor/sweetalert2.js')}}  "></script>
    <script src=" {{asset('vendor/sweetalert-eliminar.js')}} "></script>
    <script src=" {{asset('vendor/sweetalert-estatus.js')}} "></script>
    <script src=" {{asset('vendor/sweetalert-estatus2.js')}} "></script>
@stop
