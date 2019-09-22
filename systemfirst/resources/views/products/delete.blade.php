@extends('panel_main')

@section('content')

	<div class="row">
		<h1>Deseja deletar este produto?</h1>
		<div class="col-md-8">
			<strong>Foto:</strong>
			<br/><img src="{{ asset('images/' . $product->image) }}"/><br/>
			<strong>Nome: </strong>
			{{ $product->name }}<br>
			<strong>Valor: </strong>
			{{ $product->price }}
			{{ Form::open(['route' => ['products.destroy', $product->id], 'method' => 'DELETE']) }}
				{{ Form::submit('Deletar', ['class' => 'btn btn-sm btn-danger']) }}
			{{ Form::close() }}
		</div>
	</div>

@endsection