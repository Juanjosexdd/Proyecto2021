<div>
    <div class="card elevation-5 col-md-12 col-sm-12 pt-3" style="border-radius: 0.95rem">
        <div class="card-header" style="padding: .75rem .25rem">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input wire:model="search" type="email" class="form-control mr-2" placeholder="Buscar">
                <a href="{{route('admin.estados.create')}}" class="btn bg-navy btn-sm px-2 elevation-4"><i class="fas fa-plus mt-2 px-3"></i></a>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
        @if ($estados->count())
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
                        <th scope="col" role="button" wire:click="order('nombre')">
                            nombre
                            @if ($sort == 'nombre')
                                @if ($direction == 'asc')
                                    <i class="fas fas fa-sort-amount-down-alt float-right mt-1"></i>
                                @else
                                    <i class="fas fa-sort-amount-down float-right mt-1"></i>
                                @endif
                            @else
                                <i class="fas fa-sort float-right mt-1"></i>
                            @endif
                        </th>
                        <th colspan="2">Estatus</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($estados as $estado)
                        <tr>
                            <td>{{$estado->id}}</td>
                            <td>{{$estado->nombre}}</td>

                            <td> 
                                @if ($estado->estatus == 1)
                                    <span class="badge badge-success">Activo</span>
                                @else
                                    <span class="badge badge-danger">Inactivo <i class="fad fa-user-times"></i></span>
                                @endif
                            </td>
                            <td width="8px">
                                <a class="btn btn-outline-info btn-sm mr-1 elevation-4" href=" {{route('admin.estados.edit',$estado)}} "><i class="fas fa-edit"></i></a>
                            </td>
                            <td width="8px">
                                {{-- <a href="#" onclick="deleteConfirm('delele-product-form-39')"><i class="fas fa-trash"></i></a>
                                <form id="delete-product-form-39" action="{{route('admin.estados.destroy', $estado)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                </form> --}}
                                <form class="formulario-eliminar" action="{{route('admin.estados.destroy', $estado)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" id="delete-product-form-39" class="btn btn-outline-danger btn-sm elevation-4"><i class="fas fa-trash"></i></button>
                                </form>
                                
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <span class="py-2 px-4 float-right ">
                {{ $estados->links() }}
            </span>
        @else
            <div class="px-6 py-4 text-center text-sm">
                No existe ninguna coincidencia
            </div>
        @endif
        </div>
        <!-- /.card-body -->
    </div>


    
</div>
@section('css')
    <link rel="stylesheet" href="{{ asset('css/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-4.min.css') }}">
    <link rel="stylesheet" href=" {{ asset('vendor/cards.css')}} ">
@stop
@section('js')
    <script src="{{asset('vendor/sweetalert2.js')}}  "></script>
    <script src=" {{asset('vendor/sweetalert-eliminar.js')}} "></script>
    <script src=" {{asset('vendor/sweetalert-estatus.js')}} "></script>
@stop