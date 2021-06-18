@extends('adminlte::page')

@section('title', 'ENASA | EDITAR MUNICIPIO')


@section('content')
    @include('sweetalert::alert')

    <div class="card elevation-4 col-md-12 col-sm-12" style="border-radius: 0.95rem">
        <div class="card-body">
            <h3 class="text-blue">Editar el municipio {{ $ciudad->nombre }} </h3>
        </div>
    </div>

    <div class="card elevation-5 col-md-12 col-sm-12 pt-3" style="border-radius: 0.95rem" bis_skin_checked="1">

        <div class="card-body" style="overflow-y: auto">
            {!! Form::model($ciudad, ['route' => ['admin.ciudads.update', $ciudad], 'method' => 'PUT', 'autocomplete' => 'off']) !!}
            @include('admin.ciudads.partials.form')
            {!! Form::submit('Guardar Municipio', ['class' => 'btn btn-outline-primary btn-block']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('footer')
    <h5 class="text-center"><a href="https://github.com/Juanjosexdd/silosenasa" target="_blank">
            ENASA - UPTP "JJ MONTILLA"</a></h5>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('vendor/cards.css') }}">
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script>
        Livewire.on('alert', function($message) {
            Swal.fire(
                'Buen Trabajo!',
                $message,
                'success'
            )
        })

    </script>
@stop
