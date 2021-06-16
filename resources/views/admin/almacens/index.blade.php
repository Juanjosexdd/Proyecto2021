@extends('adminlte::page')

@section('title', 'ENASA | ALMACEN')

@section('content_header')
    <div class="container">
        <div class="card card-custom bg-white border-white border-0 elevation-5">
            <div class="card-body" style="overflow-y: auto">
                <h1 class="text-blue">LISTA DE ALMACEN</h1>
            </div>
        </div>
    </div>

@stop

@section('content')

    <div class="container">
        @include('sweetalert::alert')
            @livewire('show-almacen')
@stop
