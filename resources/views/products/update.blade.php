@extends('layout')

@section('content')
    <h1>Produto Atualizado</h1>

    <p>O produto "{{ $product->nome }}" foi atualizado com sucesso.</p>

    <a href="{{ route('products.index') }}" class="btn btn-primary">Voltar à Lista</a>
@endsection
