@extends('adminlte::page')

@section('title', 'ENASA | CLACIFICACIÓN')

@section('content_header')
    <h1 class="text-blue">LISTA DE CLACIFICACIÓN</h1>
@stop

@section('content')
@include('sweetalert::alert')
            @livewire('show-clacificacion')
@stop

