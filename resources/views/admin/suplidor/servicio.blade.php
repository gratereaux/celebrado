@extends('layouts.admin')

@section('title', 'Servicios')
@section('subtitle', 'Formulario de creacion de servicio')

@section('content')


    <div class="block block-themed">
        <div class="block-content">


    {!! Form::open(['route' => 'servicio.store', 'class' => 'form-horizontal push-10-t','method' => 'POST', 'files' => 'true']) !!}

        {{ Form::hidden('suplidor_id', $suplidor) }}

                <div class="form-group">
                    <div class="col-xs-6">
                        {!! Form::label('categoria_id', 'Categoría') !!}
                        {!! Form::select('categoria_id', $categorias, old('categoria_id'), ['class' => 'form-control input-lg', 'id' => 'ciudad']) !!}
                    </div>
                    <div class="col-xs-6">
                        {!! Form::label('tipo', 'Tipo de Servicio') !!}
                        {!! Form::select('tipo', ['Adulto' => 'Adulto', 'Teen' => 'Teen', 'Niños' => 'Niños', 'Todos' => 'Todos'], old('tipo'), ['class' => 'form-control input-lg', 'id' => 'ciudad']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-6">
                        {!! Form::label('metodo', 'Método') !!}
                        {!! Form::select('metodo', ['Alquiler' => 'Alquiler', 'Servicio' => 'Servicio', 'Venta' => 'Venta', 'Otros' => 'Otros'], old('metodo'), ['class' => 'form-control input-lg', 'id' => 'ciudad']) !!}
                    </div>
                    <div class="col-xs-6">
                        {!! Form::label('capacidad', 'Capacidad del servicio/Local') !!}
                        {!! Form::text('capacidad', old('capacidad'), ['class' => 'form-control input-lg', 'id' => 'ciudad', 'placeholder' => 'cero para ilimitado']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('descripcion', 'Descripcion del servicio') !!}
                    <div class="col-xs-12">
                        <div class="input-group">
                            {!! Form::textarea('descripcion', old('descripcion'), ['class' => 'form-control', 'id' => 'descripcion','rows'=> '7', 'placeholder' => 'Texto descriptivo del servicio']) !!}
                            <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('fotos', 'Imagenes') !!}
                    <div class="col-xs-12">
                        <div class="input-group">
                            {!! Form::file('photo[]', ['multiple' => 'multiple']) !!}
                            <p>Selecciona una o varias fotos para cargar. (Máximo 3)</p>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <button class="btn btn-sm btn-success" type="submit"><i class="fa fa-plus push-5-r"></i> Agregar</button>
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>






@endsection