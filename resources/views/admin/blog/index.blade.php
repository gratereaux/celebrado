@extends('layouts.admin')

@section('title', 'Blog')


@section('content')


        <!-- Dynamic Table Simple -->
<div class="block">
    <div class="block-content">

        <a style="margin-bottom: 10px;" class="btn btn-sm btn-info btn-rounded" href="{{ route('blog.create') }}"><i class="fa fa-plus"></i> Crear Nuevo Post</a>

        <!-- DataTables init on table by adding .js-dataTable-simple class, functionality initialized in js/pages/base_tables_datatables.js -->
        <table class="table table-bordered table-striped js-dataTable-simple">
            <thead>
            <tr>
                <th class="text-center">ID</th>
                <th>Titulo</th>
                <th class="hidden-xs" style="width: 15%;">Autor</th>
                <th class="hidden-xs" style="width: 15%;">Tags</th>
                <th class="text-center" style="width: 10%;">Acción</th>
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
            <tr>
                <td class="text-center">{{$post->id}}</td>
                <td class="font-w600"><a href="{{route('blog.show', $post->id)}}">{{$post->title}}</a></td>
                <td class="hidden-xs">{{$post->user->name}}</td>
                <td class="hidden-xs">
                    @foreach(explode(',', $post->tags) as $tag)
                        <span class="label label-primary">{{$tag}}</span>
                    @endforeach
                </td>
                <td class="text-center">
                    <div class="btn-group">
                        {!! Form::open(['method' => 'GET','class' => 'btn btn-xs' , 'route' => ['blog.edit', $post->id]]) !!}
                        <button class="btn btn-xs btn-default" type="submit" data-toggle="tooltip" title="Editar "><i class="fa fa-pencil"></i></button>
                        {!! Form::close() !!}

                        {!! Form::open(['method' => 'DELETE','class' => 'btn btn-xs' , 'route' => ['blog.destroy', $post->id]]) !!}
                        <button onclick="return confirm('Seguro que deseas eliminar el post?')" class="btn btn-xs btn-default" type="submit" data-toggle="tooltip" title="Remover"><i class="fa fa-times"></i></button>
                        {!! Form::close() !!}
                    </div>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
<!-- END Dynamic Table Simple -->


@endsection