@extends('panel_main')

@section('content')

<h1>Posts</h1><span class="glyphicon glyphicon-plus"></span>
	<div class="row">
		<div class="col-md-8">
			<a href="{{ route('posts.create') }}" class="btn btn-primary">Criar Post</a>
			<table class="table">
				<thead>
					<th>#</th>
					<th>Titulo</th>
					<th>Opções</th>
				</thead>
				<tbody>
					@foreach($posts as $post)
						<tr>
							<th>{{ $post->id }}</th>
							<td>{{ $post->title }}</td>
							<td>
								<a href="{{ route('posts.delete', $post->id) }}" class="btn btn-xs btn-danger">
								Excluir <span class="glyphicon glyphicon-trash"></span>
								</a>
								<a href="{{ route('posts.show', $post->id) }}" class="btn btn-xs btn-default">
								Ver <span class="glyphicon glyphicon-trash"></span>
								</a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>

@endsection