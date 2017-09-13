@extends('layouts.admin')

@section('title', 'Suplidores')
@section('subtitle', 'Formulario de creacion de suplidor')

@section('content')


<div class="block block-bordered">
    <div class="block-content">

        {!! Form::open(['route' => 'suplidor.store', 'class' => 'form-horizontal push-10-t push-10','method' => 'POST', 'files' => 'true']) !!}
            {{ csrf_field() }}
            <div class="row">
                <div class="col-sm-7">
                    <div class="form-group">
                        <div class="col-xs-6">
                            {!! Form::label('nombre', 'Nombre del Suplidor') !!}
                            {!! Form::text('nombre', null, ['class' => 'form-control input-lg', 'id' => 'mega-firstname', 'placeholder' => 'Su Nombre comercial','required']) !!}
                        </div>
                        <div class="col-xs-6">
                            {!! Form::label('correo', 'Correo electrónico') !!}
                            {!! Form::email('correo', null, ['class' => 'form-control input-lg', 'id' => 'email', 'placeholder' => 'ejemplo@tucorreo.com','required']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-6">
                            {!! Form::label('direccion', 'Dirección') !!}
                            {!! Form::text('direccion', null, ['class' => 'form-control input-lg', 'id' => 'direccion', 'placeholder' => 'Direccion Completa']) !!}
                        </div>
                        <div class="col-xs-6">
                            {!! Form::label('ciudad', 'Ciudad') !!}
                            {!! Form::select('ciudad', $ciudades, null, ['class' => 'form-control input-lg', 'id' => 'ciudad']) !!}

                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <div class="col-xs-12">
                            {!! Form::label('contacto', 'Persona de Contacto') !!}
                            {!! Form::text('contacto', null, ['class' => 'form-control input-lg', 'id' => 'contacto', 'placeholder' => 'Personal a contactar']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            {!! Form::label('web', 'Sitio Web') !!}
                            {!! Form::text('web', null, ['class' => 'form-control input-lg', 'id' => 'web', 'placeholder' => 'http://www.']) !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-7">
                    <div class="form-group">
                        <div class="col-xs-12">
                            {!! Form::label('descripcion', 'Descripción') !!}
                            {!! Form::textarea('descripcion', null, ['class' => 'form-control input-lg', 'id' => 'descripcion', 'placeholder' => 'Detalle del comercio']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-4">
                            {!! Form::label('facebook', 'Facebook') !!}
                            {!! Form::text('facebook', null, ['class' => 'form-control input-lg', 'id' => 'web', 'placeholder' => 'http://www.fb.com/']) !!}
                        </div>
                        <div class="col-xs-4">
                            {!! Form::label('twitter', 'Twitter') !!}
                            {!! Form::text('twitter', null, ['class' => 'form-control input-lg', 'id' => 'web', 'placeholder' => '@']) !!}
                        </div>
                        <div class="col-xs-4">
                            {!! Form::label('instagram', 'Instagram') !!}
                            {!! Form::text('instagram', null, ['class' => 'form-control input-lg', 'id' => 'web', 'placeholder' => '@']) !!}
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <div class="col-xs-12">
                            {!! Form::label('categorias', 'Categorías') !!}
                            <span style="font-size: small; color:orangered;"> (Selecciona una o varias opciones)</span>
                            {!! Form::select('categorias[]', $cats, null, ['class' => 'form-control', 'id' => 'categorias', 'size' => '7', 'multiple']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-6">
                            {!! Form::label('telefono', 'Teléfono de contacto') !!}
                            {!! Form::text('telefono', null, ['class' => 'form-control input-lg', 'id' => 'telefono', 'placeholder' => '(809) 999-9999']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('foto', 'Foto / Logo Suplidor') !!}
                        {!! Form::file('foto', ['class' => 'form-control input-lg']) !!}
                    </div>
                </div>
                <div class="form-group">
                        <div class="col-xs-6">
                            {!! Form::label('tipo', 'Tipo') !!}
                            {!! Form::text('tipo', null, ['class' => 'form-control input-lg', 'id' => 'tipo', 'placeholder' => 'Tipo de servicio']) !!}
                        </div>
                         <div class="col-xs-6">
                            {!! Form::label('capacidad', 'Capacidad de servicio') !!}
                            {!! Form::text('capacidad', null, ['class' => 'form-control input-lg', 'id' => 'capacidad', 'placeholder' => 'Capacidad de servicio']) !!}
                        </div>
                    </div>
            </div>

            <div class="form-group">
                <div class="col-xs-12">
                    <button class="btn btn-warning" type="submit"><i class="fa fa-check push-5-r"></i> Ingresar Suplidor</button>
                </div>
            </div>
        {!! Form::close() !!}
    </div>
</div>

@endsection