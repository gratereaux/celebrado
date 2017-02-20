@extends('layouts.soon')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Registra tus datos</div>
                    <div class="panel-body">

                        <h2 style="color: #000 !important;">Quieres que te notifiquemos cuando iniciemos? <br> Déjanos tus datos y te enviaremos un correo cuando estemos listos!</h2>


                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/pre-register') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label style="color: #000 !important;" for="name" class="col-md-4 control-label">Nombre</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label style="color: #000 !important;" for="email" class="col-md-4 control-label">E-Mail</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('instagram') ? ' has-error' : '' }}">
                                <label style="color: #000 !important;" for="name" class="col-md-4 control-label">Instagram</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="instagram" value="{{ old('instagram') }}" autofocus>

                                    @if ($errors->has('instagram'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('instagram') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Notifícame
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
