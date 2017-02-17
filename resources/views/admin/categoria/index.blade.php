@extends('layouts.admin')

@section('title', 'Categorías')


@section('content')

        <!-- Material (floating) Login -->
<div class="block block-themed">
    <div class="block-header bg-primary">
        <ul class="block-options">
            <li>
                <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
            </li>
        </ul>
        <h3 class="block-title">Agrega nueva categoría</h3>
    </div>
    <div class="block-content">
        {!! Form::open(['route' => 'categoria.store', 'class' => 'form-horizontal push-10-t push-10','method' => 'POST']) !!}
        {{ csrf_field() }}
            <div class="form-group">
                <div class="col-xs-12">
                    <div class="form-material floating">
                        <input class="form-control" type="text" id="login3-username" name="nombre">
                        <label for="login3-username">Nombre</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12">
                    <div class="form-material floating">
                        <input class="form-control" type="text" id="login3-username" name="alias">
                        <label for="login3-password">Alias</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12">
                    <button class="btn btn-sm btn-primary" type="submit"><i class="fa fa-arrow-right push-5-r"></i> Agregar nuevo</button>
                </div>
            </div>
        {!! Form::close() !!}
    </div>
</div>
<!-- END Material (floating) Login -->



    <div class="block">
        <div class="block-header">
            <h3 class="block-title">Listado de categorias disponibles</h3>
        </div>
        <div class="block-content">
            <table class="table">
                <thead>
                <tr>
                    <th class="text-center" style="width: 50px;">ID</th>
                    <th>Nombre</th>
                    <th class="hidden-xs" style="width: 15%;">Alias</th>
                    <th class="text-center" style="width: 100px;">Acción</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categorias as $cat)
                <tr>
                    <td class="text-center">{{$cat->id}}</td>
                    <td>{{$cat->nombre}}</td>
                    <td class="hidden-xs">
                        <span class="label label-warning">{{$cat->alias}}</span>
                    </td>
                    <td class="text-center">
                        <div class="btn-group">
                            {!! Form::open(['method' => 'DELETE','class' => 'btn btn-xs' , 'route' => ['categoria.destroy', $cat->id]]) !!}
                            <button onclick="return confirm('Seguro que deseas eliminar la categoría?')" class="btn btn-xs btn-default" type="submit"><i class="fa fa-times"></i></button>
                            {!! Form::close() !!}
                        </div>
                    </td>
                </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>

@endsection