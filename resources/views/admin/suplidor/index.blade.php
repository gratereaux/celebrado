@extends('layouts.admin')

@section('title', 'Suplidores')


@section('content')



        <!-- Dynamic Table Full -->
<div class="block">
    <div class="block-header">
        <h3 class="block-title">Listado de Suplidores</h3>
    </div>
    <div class="block-content">

        <a style="margin-bottom: 10px;" class="btn btn-sm btn-info btn-rounded" href="{{ route('suplidor.create') }}"><i class="fa fa-plus"></i> Crear Nuevo Suplidor</a>

        <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/base_tables_datatables.js -->
        <table class="table table-bordered table-striped js-dataTable-full">
            <thead>
            <tr>
                <th class="text-center">ID</th>
                <th>Nombre</th>
                <th class="hidden-xs">Email</th>
                <th class="hidden-xs" style="width: 15%;">Ciudad</th>
                <th class="text-center" style="width: 10%;">Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($suplidores as $suplidor)
            <tr>
                <td class="text-center"><a href="{{route('suplidor.show', $suplidor->id)}}">{{$suplidor->id}}</a></td>
                <td class="font-w600"><a href="{{route('suplidor.show', $suplidor->id)}}">{{$suplidor->nombre}}</a></td>
                <td class="hidden-xs">{{$suplidor->correo}}</td>
                <td class="hidden-xs">{{$ciudades[$suplidor->ciudad]}}</td>
                <td class="text-center">
                    <div class="btn-group">
                       {!! Form::open(['method' => 'GET','class' => 'btn btn-xs' , 'route' => ['suplidor.edit', $suplidor->id]]) !!}
                        <button class="btn-default" type="submit"><i class="fa fa-pencil"></i></button>
                        {!! Form::close() !!}

                        {!! Form::open(['method' => 'DELETE','class' => 'btn btn-xs' , 'route' => ['suplidor.destroy', $suplidor->id]]) !!}
                            <button onclick="return confirm('Seguro que deseas eliminar el suplidor?')" class="btn-default" type="submit"><i class="fa fa-times"></i></button>
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