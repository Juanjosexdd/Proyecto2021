@extends('adminlte::page')

@section('title', 'ENASA | PROVEEDORES')

@section('content_header')
    <h1 class="text-blue">LISTA DE PROVEEDORES</h1>
@stop

@section('content')
@include('sweetalert::alert')
            @livewire('show-proveedor')
@stop

