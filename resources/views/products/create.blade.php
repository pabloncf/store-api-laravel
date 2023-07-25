@extends('layout')

@section('content')
    <h1>Adicioar produtos</h1>

    <a href="{{ route('products.index') }}" class="btn btn-primary mb-3">Produtos</a>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nome:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Descrição:</label>
            <textarea name="description" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="category_id">Categoria:</label>
            <select type="text" name="category_id" class="form-control">
                @foreach ($options as $key => $option)
                    <option value="{{ $key }}">
                        {{$option}}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="price">Preço:</label>
            <input type="number" name="price" class="form-control" step="0.01" required>
        </div>
        <div class="form-group">
            <label for="quantity">Quantidade:</label>
            <input type="number" name="quantity" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Adicionar Produto</button>
    </form>


@endsection
