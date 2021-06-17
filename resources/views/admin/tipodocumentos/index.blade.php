@extends('adminlte::page')

@section('title', 'ENASA | TIPO DOCUMENTOS')

@section('content_header')
    <h1 class="text-blue">LISTA TIPO DE DOCUMENTO</h1>
@stop

@section('content')
@include('sweetalert::alert')

<div class="container">

    @livewire('show-tipodocumento')

</div>
@stop

@section('footer')
<h5 class="text-center"><a href="https://github.com/Juanjosexdd/proyecto2021"  target="_blank">
    ENASA - UPTP "JJ MONTILLA"</a></h5>
@stop


