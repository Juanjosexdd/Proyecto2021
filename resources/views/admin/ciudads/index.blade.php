@extends('adminlte::page')

@section('title', 'ENASA | MUNICIPIOS')

@section('content_header')
    <h1 class="text-blue">LISTA DE MUNICIPIOS</h1>
@stop

@section('content')

@include('sweetalert::alert')
            @livewire('show-ciudad')
@stop

