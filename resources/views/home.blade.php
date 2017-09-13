@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Hola {{ Auth::user()->name }}, en que te puedo ayudar hoy?!
                </div>
            </div>

            @if(Auth::user()->type == 'admin' && Auth::user()->name == 'Jose Gratereaux' )
            <passport-clients></passport-clients>
            <passport-authorized-clients></passport-authorized-clients>
            <passport-personal-access-tokens></passport-personal-access-tokens>
            @endif
        </div>
    </div>
</div>
@endsection
