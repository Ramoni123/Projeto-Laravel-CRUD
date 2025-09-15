@extends('layouts.app')

@section('content')
    <h2>Editar Produto</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('produtos.update', $produto->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-md-12 mb-3">
                <label for="nome" class="form-label"><strong>Nome:</strong></label>
                <input type="text" name="nome" value="{{ old('nome', $produto->nome) }}" class="form-control" placeholder="Nome">
            </div>
            <div class="col-md-12 mb-3">
                <label for="descricao" class="form-label"><strong>Descrição:</strong></label>
                <textarea class="form-control" style="height:150px" name="descricao">{{ old('descricao', $produto->descricao) }}</textarea>
            </div>
            <div class="col-md-6 mb-3">
                <label for="preco" class="form-label"><strong>Preço:</strong></label>
                <input type="text" name="preco" value="{{ old('preco', $produto->preco) }}" class="form-control" placeholder="Preço">
            </div>
            <div class="col-md-6 mb-3">
                <label for="data_validade" class="form-label"><strong>Data de Validade:</strong></label>
                <input type="date" name="data_validade" value="{{ old('data_validade', $produto->data_validade->format('Y-m-d')) }}" class="form-control">
            </div>
            <div class="col-md-12 mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="ativo" value="1" id="ativo" @checked(old('ativo', $produto->ativo))>
                    <label class="form-check-label" for="ativo">
                        Produto Ativo
                    </label>
                </div>
            </div>
            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Atualizar</button>
                <a class="btn btn-secondary" href="{{ route('produtos.index') }}">Voltar</a>
            </div>
        </div>
    </form>
@endsection