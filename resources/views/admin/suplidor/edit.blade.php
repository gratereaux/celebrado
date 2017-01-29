@extends('layouts.admin')

@section('title', 'Suplidores')
@section('subtitle', 'Formulario de edición de suplidor')

@section('content')


    <div class="block block-bordered">
        <div class="block-content">

            {!! Form::open(['route' => 'suplidor.store', 'class' => 'form-horizontal push-10-t push-10','method' => 'POST']) !!}
            <div class="row">
                <div class="col-sm-7">
                    <div class="form-group">
                        <div class="col-xs-6">
                            {!! Form::label('nombre', 'Nombre del Suplidor') !!}
                            {!! Form::text('nombre', $suplidor->nombre, ['class' => 'form-control input-lg', 'id' => 'mega-firstname', 'placeholder' => 'Su Nombre comercial','required']) !!}
                        </div>
                        <div class="col-xs-6">
                            {!! Form::label('correo', 'Correo electrónico') !!}
                            {!! Form::email('correo', $suplidor->correo, ['class' => 'form-control input-lg', 'id' => 'email', 'placeholder' => 'ejemplo@tucorreo.com','required']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-6">
                            {!! Form::label('direccion', 'Dirección') !!}
                            {!! Form::text('direccion', $suplidor->direccion, ['class' => 'form-control input-lg', 'id' => 'direccion', 'placeholder' => 'Direccion Completa']) !!}
                        </div>
                        <div class="col-xs-6">
                            {!! Form::label('ciudad', 'Ciudad') !!}
                            {!! Form::text('ciudad', $suplidor->ciudad, ['class' => 'form-control input-lg', 'id' => 'ciudad', 'placeholder' => 'Ciudad o Provincia']) !!}
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <div class="col-xs-12">
                            {!! Form::label('contacto', 'Persona de Contacto') !!}
                            {!! Form::text('contacto', $suplidor->contacto, ['class' => 'form-control input-lg', 'id' => 'contacto', 'placeholder' => 'Personal a contactar']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            {!! Form::label('web', 'Sitio Web') !!}
                            {!! Form::text('web', $suplidor->web, ['class' => 'form-control input-lg', 'id' => 'web', 'placeholder' => 'http://www.']) !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-7">
                    <div class="form-group">
                        <div class="col-xs-12">
                            {!! Form::label('descripcion', 'Descripción') !!}
                            {!! Form::textarea('descripcion', $suplidor->descripcion, ['class' => 'form-control input-lg', 'id' => 'descripcion', 'placeholder' => 'Detalle del comercio']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-4">
                            {!! Form::label('facebook', 'Facebook') !!}
                            {!! Form::text('facebook', $suplidor->facebook, ['class' => 'form-control input-lg', 'id' => 'web', 'placeholder' => 'http://www.fb.com/']) !!}
                        </div>
                        <div class="col-xs-4">
                            {!! Form::label('twitter', 'Twitter') !!}
                            {!! Form::text('twitter', $suplidor->twitter, ['class' => 'form-control input-lg', 'id' => 'web', 'placeholder' => '@']) !!}
                        </div>
                        <div class="col-xs-4">
                            {!! Form::label('instagram', 'Instagram') !!}
                            {!! Form::text('instagram', $suplidor->instagram, ['class' => 'form-control input-lg', 'id' => 'web', 'placeholder' => '@']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-6">
                            {!! Form::label('capacidad', 'Capacidad en personas de atención') !!}
                            {!! Form::number('capacidad', $suplidor->capacidad, ['class' => 'form-control input-lg', 'id' => 'web', 'placeholder' => '0']) !!}
                        </div>
                        <div class="col-xs-6">
                            {!! Form::label('tipo', 'Tipo de servicios') !!}
                            {!! Form::text('tipo', $suplidor->tipo, ['class' => 'form-control input-lg', 'id' => 'web', 'placeholder' => '']) !!}
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <div class="col-xs-12">
                            {!! Form::label('categorias', 'Categorías') !!}
                            <span style="font-size: small; color:orangered;"> (Selecciona una o varias opciones)</span>
                            {!! Form::select('categorias[]', $cats, $categorias, ['class' => 'form-control', 'id' => 'categorias', 'size' => '7', 'multiple']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-6">
                            {!! Form::label('telefono', 'Teléfono de contacto') !!}
                            {!! Form::text('telefono', $suplidor->telefono, ['class' => 'form-control input-lg', 'id' => 'telefono', 'placeholder' => '(809) 999-9999']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('foto', 'Foto') !!}
                        {!! Form::file('foto', $suplidor->foto, ['class' => 'form-control input-lg']) !!}
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-xs-12">
                    <button class="btn btn-warning" type="submit"><i class="fa fa-check push-5-r"></i> Editar Suplidor</button>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>

@endsection