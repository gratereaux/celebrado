@extends('layouts.admin')

@section('title', 'Usuarios')


@section('content')



        <!-- Dynamic Table Full -->
<div class="block">
    <div class="block-header">
        <h3 class="block-title">Listado de Usuarios Registrados</h3>
    </div>
    <div class="block-content">

        <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/base_tables_datatables.js -->
        <table class="table table-bordered table-striped js-dataTable-full">
            <thead>
            <tr>
                <th class="text-center">ID</th>
                <th>Nombre</th>
                <th class="hidden-xs">Email</th>
                <th class="text-center" style="width: 10%;">Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($usuarios as $usuario)
                <tr>
                    <td class="text-center"><a href="{{route('usuario.show', $usuario->id)}}">{{$usuario->id}}</a></td>
                    <td class="font-w600"><a href="{{route('usuario.show', $usuario->id)}}">{{$usuario->name}}</a></td>
                    <td class="hidden-xs">{{$usuario->email}}</td>
                    <td class="text-center">
                        <div class="btn-group">
                            {!! Form::open(['method' => 'GET','class' => 'btn btn-xs' , 'route' => ['usuario.edit', $usuario->id]]) !!}
                            <button class="btn-default" type="submit"><i class="fa fa-pencil"></i></button>
                            {!! Form::close() !!}

                            {!! Form::open(['method' => 'DELETE','class' => 'btn btn-xs' , 'route' => ['usuario.destroy', $usuario->id]]) !!}
                            <button onclick="return confirm('Seguro que deseas desactivar el Usuario?')" class="btn-default" type="submit"><i class="fa fa-times"></i></button>
                            {!! Form::close() !!}
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
<!-- END Dynamic Table Full -->



@endsection