@extends('layouts.admin')

@section('title')
    Perfil de {{$suplidor->nombre}}
@endsection


@section('content')


            <!-- Page Content -->
    <div class="content content-boxed">
        <!-- User Header -->
        <div class="block">
            <!-- Basic Info -->
            <div class="bg-image" style="background-image: url('/assets/img/photos/photo6@2x.jpg');">
                <div class="block-content bg-primary-dark-op text-center overflow-hidden">
                    <div class="push-30-t push animated fadeInDown">
                        <img class="img-avatar img-avatar96 img-avatar-thumb" src="/assets/img/avatars/avatar4.jpg" alt="">
                    </div>
                    <div class="push-30 animated fadeInUp">
                        <h2 class="h4 font-w600 text-white push-5">{{$suplidor->nombre}}</h2>
                        <h3 class="h5 text-gray">
                            Web Designer, Developer, Lol
                        </h3>

                    </div>
                </div>
            </div>
            <!-- END Basic Info -->

        </div>
        <!-- END User Header -->

        <!-- Main Content -->
        <div class="row">
            <div class="col-sm-5 col-sm-push-7 col-lg-4 col-lg-push-8">
                <a style="width: 100%;" class="btn btn-sm btn-info" href="{{ route('suplidor.index') }}">Volver a Listado de suplidores</a>
                <!-- Follow -->
                <div class="block">
                    <div class="block-content">
                        <h4>Acciones</h4>
                        <hr>
                    </div>
                    <div class="block-content block-content-full text-center">
                        {!! Form::open(['method' => 'GET','class' => 'btn btn-xs' , 'route' => ['suplidor.edit', $suplidor->id]]) !!}
                        <button type="submit" class="btn btn-sm btn-default"><i class="fa fa-fw fa-pencil text-info"></i> Editar</button>
                        {!! Form::close() !!}

                        {!! Form::open(['method' => 'DELETE','class' => 'btn btn-xs' , 'route' => ['suplidor.destroy', $suplidor->id]]) !!}
                        <button type="submit" onclick="return confirm('Seguro que deseas eliminar el suplidor?')" class="btn btn-sm btn-default"><i class="fa fa-fw fa-times text-danger"></i> Borrar</button>
                        {!! Form::close() !!}
                    </div>
                </div>
                <!-- END Follow -->

                <!-- About -->
                <div class="block">
                    <div class="block-content">
                        <h4>Descripción</h4>
                        <hr>
                        <p>{{$suplidor->descripcion}}</p>
                    </div>
                </div>
                <!-- END About -->



            </div>
            <div class="col-sm-7 col-sm-pull-5 col-lg-8 col-lg-pull-4">
                <!-- Timeline -->
                <div class="block block-opt-refresh-icon6">
                    <div class="block-header">
                        <ul class="block-options">
                            <li>
                                <button type="button" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                            </li>
                            <li>
                                <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                            </li>
                        </ul>
                        <h3 class="block-title"><i class="fa fa-newspaper-o"></i> Información</h3>
                    </div>
                    <div class="block-content">
                        <!-- Facebook Notification -->
                        <div class="block block-transparent pull-r-l">
                            <div class="col-sm-4 block block-transparent pull-r-l">
                                <div class="block-header bg-gray-lighter">
                                    <h4 class="block-title">Correo</h4>
                                </div>
                                <div class="block-content">
                                    <p class="font-s13">{{$suplidor->correo}}</p>
                                </div>
                            </div>
                            <div class="col-sm-4 block block-transparent pull-r-l">
                                <div class="block-header bg-gray-lighter">
                                    <h4 class="block-title">Contacto</h4>
                                </div>
                                <div class="block-content">
                                    <p class="font-s13">{{$suplidor->contacto}}</p>
                                </div>
                            </div>
                            <div class="col-sm-4 block block-transparent pull-r-l">
                                <div class="block-header bg-gray-lighter">
                                    <h4 class="block-title">Sitio Web</h4>
                                </div>
                                <div class="block-content">
                                    <p class="font-s13">{{$suplidor->web}}</p>
                                </div>
                            </div>


                            <div class="block-header bg-gray-lighter">

                            </div>

                        </div>
                        <!-- END Facebook Notification -->

                        <!-- Generic Notification -->
                        <div class="block block-transparent pull-r-l">
                            <div class="block-header bg-gray-lighter">
                                <h3 class="block-title">Categorías</h3>
                            </div>
                            <div class="block-content block-content-full">
                                <a class="item item-rounded push-10-r bg-info" data-toggle="tooltip" title="MyPanel" href="javascript:void(0)">
                                    <i class="si si-rocket text-white-op"></i>
                                </a>
                                <a class="item item-rounded push-10-r bg-amethyst" data-toggle="tooltip" title="Project Time" href="javascript:void(0)">
                                    <i class="si si-calendar text-white-op"></i>
                                </a>
                                <a class="item item-rounded push-10-r bg-city" data-toggle="tooltip" title="iDashboard" href="javascript:void(0)">
                                    <i class="si si-speedometer text-white-op"></i>
                                </a>
                            </div>
                        </div>
                        <!-- END Generic Notification -->

                        <!-- Twitter Notification -->
                        <div class="block block-transparent pull-r-l">
                            <div class="block-header bg-gray-lighter">
                                <h3 class="block-title">Dirección Física</h3>
                            </div>
                            <div class="block-content">
                                <p class="font-s13">{{$suplidor->direccion}}</p>
                                <p class="font-s13">{{$suplidor->ciudad}}</p>
                            </div>
                        </div>
                        <!-- END Twitter Notification -->

                        <!-- System Notification -->
                        <div class="block block-transparent pull-r-l">
                            <div class="block-header bg-gray-lighter">
                                <h3 class="block-title">Redes Sociales</h3>
                            </div>
                            <div class="block-content">
                                <div class="col-lg-4">
                                    <a class="block block-link-hover2" href="http://facebook.com/{{$suplidor->facebook}}">
                                        <div class="block-content block-content-full bg-primary clearfix">
                                            <i class="fa fa-facebook fa-2x text-white pull-right"></i>
                                            <span class="h4 font-w700 text-white">f</span><span class="h4 text-white-op">acebook</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4">
                                    <a class="block block-link-hover2" href="{{$suplidor->twitter}}">
                                        <div class="block-content block-content-full bg-info clearfix">
                                            <i class="fa fa-twitter fa-2x text-white pull-right"></i>
                                            <span class="h4 font-w700 text-white">T</span><span class="h4 text-white-op">witter</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4">
                                    <a class="block block-link-hover2" href="{{$suplidor->instagram}}">
                                        <div class="block-content block-content-full bg-danger clearfix">
                                            <i class="fa fa-instagram fa-2x text-white pull-right"></i>
                                            <span class="h4 font-w700 text-white">I</span><span class="h4 text-white-op">nstagram</span>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                        <!-- END System Notification -->

                        <!-- Social Notification -->
                        <div class="block block-transparent pull-r-l">
                            <div class="block-header bg-gray-lighter">
                                <h3 class="block-title">Teléfono</h3>
                            </div>
                            <div class="block-content">
                                {{$suplidor->telefono}}
                            </div>
                        </div>
                        <!-- END Social Notification -->


                    </div>
                </div>
                <!-- END Timeline -->
            </div>
        </div>
        <!-- END Main Content -->



@endsection