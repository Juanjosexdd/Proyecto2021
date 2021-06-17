@extends('adminlte::page')

@section('title', 'ENASA | LISTA DE ESTADOS')

@section('content_header')
    <h1 class="text-blue">LISTA DE ESTADOS</h1>
@stop

@section('content')
<div class="container">
    @include('sweetalert::alert')
    @livewire('show-estado')
</div>
@stop
@section('js')
@stop