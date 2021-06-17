<div class="card elevation-5 col-md-12 col-sm-12 pt-3" style="border-radius: 0.95rem">
    <div class="card-header" style="padding: .75rem .25rem">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
            </div>
            <input wire:model="search" type="email" class="form-control mr-2" placeholder="Buscar">
            <a href="{{ route('admin.empleados.create') }}" class="btn bg-navy btn-sm px-2 elevation-4"><i
                    class="fas fa-plus mt-2 px-3"></i></a>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
        @if ($empleados->count())
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col" role="button" wire:click="order('id')">
                            ID
                            @if ($sort == 'id')
                                @if ($direction == 'asc')
                                    <i class="fas fas fa-sort-amount-down-alt float-right mt-1"></i>
                                @else
                                    <i class="fas fa-sort-amount-down float-right mt-1"></i>
                                @endif
                            @else
                                <i class="fas fa-sort float-right mt-1"></i>
                            @endif

                        </th>
                        <th scope="col" role="button" wire:click="order('cedula')">
                            Identificacion
                            @if ($sort == 'cedula')
                                @if ($direction == 'asc')
                                    <i class="fas fa-sort-numeric-up-alt float-right mt-1"></i>
                                @else
                                    <i class="fas fa-sort-numeric-down-alt float-right mt-1"></i>
                                @endif
                            @else
                                <i class="fas fa-sort float-right mt-1"></i>
                            @endif
                        </th>
                        <th scope="col" role="button" wire:click="order('nombres')">
                            Nombres
                            @if ($sort == 'nombres')
                                @if ($direction == 'asc')
                                    <i class="fas fas fa-sort-amount-down-alt float-right mt-1"></i>
                                @else
                                    <i class="fas fa-sort-amount-down float-right mt-1"></i>
                                @endif
                            @else
                                <i class="fas fa-sort float-right mt-1"></i>
                            @endif
                        </th>
                        <th scope="col" role="button" wire:click="order('email')">
                            Correo
                            @if ($sort == 'email')
                                @if ($direction == 'asc')
                                    <i class="fas fas fa-sort-amount-down-alt float-right mt-1"></i>
                                @else
                                    <i class="fas fa-sort-amount-down float-right mt-1"></i>
                                @endif
                            @else
                                <i class="fas fa-sort float-right mt-1"></i>
                            @endif
                        </th>
                        <th scope="col" role="button" wire:click="order('cargo_id')">
                            Cargo
                            @if ($sort == 'cargo_id')
                                @if ($direction == 'asc')
                                    <i class="fas fas fa-sort-amount-down-alt float-right mt-1"></i>
                                @else
                                    <i class="fas fa-sort-amount-down float-right mt-1"></i>
                                @endif
                            @else
                                <i class="fas fa-sort float-right mt-1"></i>
                            @endif
                        </th>
                        <th>Estatus</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($empleados as $empleado)
                        <tr>
                            <td><a href="" data-toggle="modal" data-target="#modal-default">{{ $empleado->id }}</a></td>
                            <td><a href="" data-toggle="modal"
                                    data-target="#modal-default">{{ $empleado->tipodocumento->abreviado }}-{{ $empleado->cedula }}</a>
                            </td>
                            <td><a href="" data-toggle="modal" data-target="#modal-default">{{ $empleado->nombres }}
                                    {{ $empleado->apellidos }}</a></td>
                            <td><a href="" data-toggle="modal" data-target="#modal-default">{{ $empleado->email }}</a>
                            </td>
                            <td><a href="" data-toggle="modal" data-target="#modal-default">
                                    {{ $empleado->cargo->nombre }}</a></td>
                                    <td>
                                        @if ($empleado->estatus == 1)
                                            <span class="badge badge-success">Activo</span>
                                        @else
                                            <span class="badge badge-danger">Inactivo</span>
                                        @endif
                                    </td>
                                    <td width="4px">
                                        <div class="btn-group" style="border-color: #ddd">
                                            <a type="button" class="btn btn-default btn-sm"
                                                style="border-color: rgb(158, 157, 157)">
                                                @if ($empleado->estatus == 1)
                                                    <form class="formulario-estatus"
                                                        action="{{ route('admin.empleados.estatuempleado', $empleado) }}" method="get">
                                                        @csrf
                                                        <button type="submit" class="btn btn-default btn-sm p-0"><i
                                                                class="fas fa-user-check text-success"></i></button>
                                                    </form>
                                                @else
                                                    <form class="formulario-estatus2"
                                                        action="{{ route('admin.empleados.estatuempleado', $empleado) }}" method="get">
                                                        @csrf
                                                        <button type="submit" class="btn btn-default text-danger btn-sm p-0"><i
                                                                class="fas fa-user-times"></i></button>
                                                    </form>
                                                @endif
                                            </a>
                                            <a class="btn btn-default btn-sm" style="border-color: rgb(158, 157, 157)"
                                                href=" {{ route('admin.empleados.edit', $empleado) }} "><i
                                                    class="fas fa-edit text-blue"></i></a>
                                            <a class="btn btn-default btn-sm" style="border-color: rgb(158, 157, 157)"
                                                href=" {{ route('admin.empleados.show', $empleado) }} "><i
                                                    class="fas fa-eye text-yellow"></i></a>
                                            <a type="button" class="btn btn-default btn-sm"
                                                style="border-color: rgb(158, 157, 157)">
                                                <form class="formulario-eliminar"
                                                    action="{{ route('admin.empleados.destroy', $empleado) }}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-default btn-sm p-0 text-danger"><i
                                                            class="fas fa-trash"></i></button>
                                                </form>
                                            </a>
                                        </div>
        
                                    </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <span class="py-2 px-4 float-right ">
                {{ $empleados->links() }}
            </span>
        @else
            <div class="px-6 py-4 text-center text-sm">
                No existe ninguna coincidencia
            </div>
        @endif
    </div>
</div>
@section('css')
    <link rel="stylesheet" href="{{ asset('css/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/cards.css') }}">
@stop

@section('js')
    <script src="{{ asset('vendor/sweetalert2.js') }}  "></script>
    <script src=" {{ asset('vendor/sweetalert-eliminar.js') }} "></script>
    <script src=" {{ asset('vendor/sweetalert-estatus.js') }} "></script>
    <script src=" {{ asset('vendor/sweetalert-estatus2.js') }} "></script>
@stop
