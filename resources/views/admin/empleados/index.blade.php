@extends('adminlte::page')

@section('title', 'ENASA | TRABAJADORES')

@section('content_header')
    <h1 class="text-blue">LISTA DE TRABAJADORES</h1>
@stop

@section('content')
@include('sweetalert::alert')

<div class="container">

            @livewire('show-empleado')
@stop

