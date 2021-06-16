@extends('adminlte::page')

@section('title', 'ENASA | CARGOS')

@section('content_header')
    <h1 class="text-blue">LISTA DE CARGOS</h1>
@stop

@section('content')
            @livewire('show-cargos')
@stop

