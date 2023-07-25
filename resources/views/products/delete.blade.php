@extends('layout')

@section('content')
    <h1>Confirmar Exclusão</h1>

    <p>Deseja realmente excluir o produto "{{ $product->nome }}"?</p>

    <form action="{{ route('products.destroy', $product->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Excluir</button>
        <a href="{{ route('products.index') }}" class="btn btn-primary">Cancelar</a>
    </form>
@endsection
``
