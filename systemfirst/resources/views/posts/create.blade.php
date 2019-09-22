@extends('panel_main')

<!-- Editor de texto 
<script src="http://systemfirst.test/editor/jquery-3.2.1.slim.min.js"></script>
<link href="http://systemfirst.test/editor/dist/summernote-lite.css" rel="stylesheet">
<script src="http://systemfirst.test/editor/dist/summernote-lite.js"></script>
-->
<!-- Editor de texto -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-lite.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-lite.js"></script>

@section('content')
<h1>Criar post:</h1>
{!! Form::open(['route' => 'posts.store']) !!}

{{ Form::label('title', 'Title:') }}
{{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '254')) }}

{{ Form::label('body', 'Content:') }}
{{ Form::textarea('body', null, array('class' => 'form-control', 'required' => '', 'id' => 'summernote')) }}

{{ Form::submit('Criar Post', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
{!! Form::close() !!}

	<!-- Editor de texto -->
	<!--
		colocar 'id' => 'summernote' no array do Form::textarea
	-->
	<script>
		$('#summernote').summernote({
			placeholder: 'Crie algo incrivel!!',
			tabsize: 2,
			height: 100
		});
	</script>

@endsection
