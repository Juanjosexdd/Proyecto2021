@extends('adminlte::page')

@section('title', 'ENASA | PRODUCTOS')

@section('content')
    @include('sweetalert::alert')

    <div class="container">
        <div class="card elevation-4 col-md-12 col-sm-12" style="border-radius: 0.95rem">
            <div class="card-body">
                <h3 class="text-blue">Lista de productos</h3>
            </div>
        </div>
    </div>

    <div class="container">
        @livewire('show-producto')
    </div>
@stop

@section('footer')
    <h5 class="text-center"><a href="https://github.com/Juanjosexdd/proyecto2021" target="_blank">
            ENASA - UPTP "JJ MONTILLA"</a></h5>
@stop
