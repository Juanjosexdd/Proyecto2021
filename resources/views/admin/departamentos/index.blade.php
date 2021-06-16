@extends('adminlte::page')

@section('title', 'ENASA | DEPARTAMENTOS')

@section('content_header')
    <h1 class="text-blue">LISTA DE DEPARTAMENTOS</h1>
@stop

@section('content')
@include('sweetalert::alert')
            @livewire('show-departamento')
@stop

