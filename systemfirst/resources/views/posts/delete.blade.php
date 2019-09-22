@extends('panel_main')

@section('content')

	<div class="row">
		<h1>Deseja deletar este post?</h1>
		<div class="col-md-8">
			<strong>Titulo: </strong>
			{{ $post->title }}<br>
			<strong>Conteudo: </strong>
			{{ $post->body }}
			{{ Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) }}
				{{ Form::submit('Deletar', ['class' => 'btn btn-sm btn-danger']) }}
			{{ Form::close() }}
		</div>
	</div>

@endsection