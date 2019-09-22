@extends('panel_main')

@section('content')

<h1>{{ $post->title }}</h1>
<p>{!! $post->body !!}</p>
<a href="{{ route('posts.delete', $post->id) }}" class="btn btn-xs btn-danger">
	Excluir <span class="glyphicon glyphicon-trash"></span>
</a>
<a href="{{ route('posts.edit', $post->id) }}" class="btn btn-xs btn-primary">
	Editar <span class="glyphicon glyphicon-trash"></span>
</a>
@endsection