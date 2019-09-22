@extends('panel_main')

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

@section('content')

{!! Form::open(['route' => 'products.store', 'files' => true]) !!}

{{ Form::label('image', 'Foto:', ['class' => 'form-spacing-top-fields']) }}
{{ Form::file('image', ['class' => 'form-control', 'required' => '', 'id'=> 'profile-img']) }}
<img src="" id="profile-img-tag" width="200px" />

{{ Form::label('name', 'Nome:') }}
{{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '254')) }}
{{ Form::label('price', 'Preço:') }}
{{ Form::text('price', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '254')) }}
{{ Form::submit('Create Product', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}

<!-- Imagem -->

<script type="text/javascript">
	$('#profile-img-tag').hide(); // to hide image
	function readURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function (e) {
				$('#profile-img-tag').attr('src', e.target.result);
				$('#profile-img-tag').show(); // to show image
				$('#profile-img-tag').after( "<br/>" );
			}
			reader.readAsDataURL(input.files[0]);
		}
	}
	$("#profile-img").change(function(){
		readURL(this);
	});
</script>

{!! Form::close() !!}

@endsection
