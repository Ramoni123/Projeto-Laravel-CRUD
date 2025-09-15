@extends('layouts.app')

@section('content')
    <h2>Adicionar Novo Produto</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Opa!</strong> Houve alguns problemas com os dados informados.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('produtos.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-12 mb-3">
                <label for="nome" class="form-label"><strong>Nome:</strong></label>
                <input type="text" name="nome" value="{{ old('nome') }}" class="form-control" placeholder="Nome do Produto">
            </div>
            <div class="col-md-12 mb-3">
                <label for="descricao" class="form-label"><strong>Descrição:</strong></label>
                <textarea class="form-control" style="height:150px" name="descricao" placeholder="Descrição">{{ old('descricao') }}</textarea>
            </div>
            <div class="col-md-6 mb-3">
                <label for="preco" class="form-label"><strong>Preço:</strong></label>
                <input type="text" name="preco" value="{{ old('preco') }}" class="form-control" placeholder="99.99">
            </div>
            <div class="col-md-6 mb-3">
                <label for="data_validade" class="form-label"><strong>Data de Validade:</strong></label>
                <input type="date" name="data_validade" value="{{ old('data_validade') }}" class="form-control">
            </div>
            <div class="col-md-12 mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="ativo" value="1" id="ativo" checked>
                    <label class="form-check-label" for="ativo">
                        Produto Ativo
                    </label>
                </div>
            </div>
            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a class="btn btn-secondary" href="{{ route('produtos.index') }}">Voltar</a>
            </div>
        </div>
    </form>
@endsection