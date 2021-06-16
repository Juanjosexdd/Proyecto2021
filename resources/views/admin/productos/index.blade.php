@extends('adminlte::page')

@section('title', 'ENASA | PRODUCTOS')

@section('content_header')
    <h1 class="text-blue">LISTA DE PRODUCTOS</h1>
@stop

@section('content')
@include('sweetalert::alert')
            @livewire('show-producto')
@stop

