@extends('layout')

@section('content')
    <h1>Adicionar Categoria</h1>

    <a href="{{ route('products.index') }}" class="btn btn-primary mb-3">Produtos</a>

    <form action="{{ route('category.create') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Categoria:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Adicionar Categoria</button>
    </form>


@endsection
