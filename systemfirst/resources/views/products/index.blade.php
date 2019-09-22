@extends('panel_main')

@section('content')
	<h1>Produtos</h1><span class="glyphicon glyphicon-plus"></span>
	<div class="row">
		<div class="col-md-8">
			<a href="{{ route('products.create') }}" class="btn btn-primary">Criar Produto</a>
			<table class="table">
				<thead>
					<th>#</th>
					<th>Foto</th>
					<th>Nome</th>
					<th>Preço</th>
					<th>Opções</th>
				</thead>
				<tbody>
					@foreach($products as $product)
						<tr>
							<th>{{ $product->id }}</th>
							<td><img src="{{ asset('images/' . $product->image) }}"/></td>
							<td>{{ $product->name }}</td>
							<td>{{ $product->price }}</td>
							<td>
								<a href="{{ route('products.delete', $product->id) }}" class="btn btn-xs btn-danger">
								Excluir <span class="glyphicon glyphicon-trash"></span>
								</a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>

@endsection