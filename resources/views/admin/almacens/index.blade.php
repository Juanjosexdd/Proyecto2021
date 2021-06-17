@extends('adminlte::page')

@section('title', 'ENASA | ALMACEN')

@section('content_header')
    <div class="container">
        <div class="card elevation-4 col-md-12 col-sm-12" style="border-radius: 0.95rem">
            <div class="card-body">
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

@section('footer')
<h5 class="text-center"><a href="https://github.com/Juanjosexdd/proyecto2021"  target="_blank">
    ENASA - UPTP "JJ MONTILLA"</a></h5>
@stop
