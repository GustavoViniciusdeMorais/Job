@extends('panel_main')

<!-- Editor de texto 
<script src="http://systemfirst.test/editor/jquery-3.2.1.slim.min.js"></script>
<link href="http://systemfirst.test/editor/dist/summernote-lite.css" rel="stylesheet">
<script src="http://systemfirst.test/editor/dist/summernote-lite.js"></script>
-->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-lite.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-lite.js"></script>

@section('content')

{!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT', 'files' => true]) !!}

{{ Form::label('title', 'Title:') }}
{{ Form::text('title', null, ["class" => 'form-control input-lg']) }}

{{ Form::label('body', 'Content:', ['class' => 'form-spacing-top']) }}
{{ Form::textarea('body', null, ["class" => 'form-control', 'id' => 'summernote']) }}

{{ Form::submit('Salvar mudanças', ['class' => 'btn btn-success btn-clock']) }}

	<!-- Editor de texto -->
	<!--
		colocar 'id' => 'summernote' no array do Form::textarea
	-->
	<script>
		$('#summernote').summernote({
			placeholder: 'Hello stand alone ui',
			tabsize: 2,
			height: 100
		});
	</script>

{!! Form::close() !!}

@endsection