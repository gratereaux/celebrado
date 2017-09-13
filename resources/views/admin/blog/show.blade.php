@extends('layouts.admin')

@section('title', 'Blog')


@section('content')




<div class="block">
    <div class="block-content block-content-full">
        Artiículo de <a class="font-w600" href="javascript:void(0)">{{$post->user->name}}</a>, en la categoriía de <a href="">{{$post->categoria}}</a>.
        <span class="pull-right"><a href="{{route('blog.index')}}">Ver todos los posts >></a></span>
    </div>
    <div class="content bg-image" style="background-image: url('/upload/blog/photo27.jpg'); height:250px;"></div>
    <div class="block-content block-content-full">
        <h1 class="h2 push-10">{{$post->title}}</h1>
        <p class="text-gray-dark">{{$post->content}}</p>
        <hr>
        <h4>Tags: </h4>
            @foreach(explode(',', $post->tags) as $tag)
                <span class="label label-primary">{{$tag}}</span>
            @endforeach
        <hr>            
        <a class="btn btn-sm btn-warning" href="javascript:void(0)">Editar</a> <a class="btn btn-sm btn-danger" href="javascript:void(0)">Borrar</a>
    </div>
</div>


@endsection