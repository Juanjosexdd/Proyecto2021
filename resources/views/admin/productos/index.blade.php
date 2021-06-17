@extends('adminlte::page')

@section('title', 'ENASA | PRODUCTOS')

@section('content_header')
    <h1 class="text-blue">LISTA DE PRODUCTOS</h1>
@stop

@section('content')
@include('sweetalert::alert')
            @livewire('show-producto')
@stop

@section('footer')
<h5 class="text-center"><a href="https://github.com/Juanjosexdd/proyecto2021"  target="_blank">
    ENASA - UPTP "JJ MONTILLA"</a></h5>
@stop
