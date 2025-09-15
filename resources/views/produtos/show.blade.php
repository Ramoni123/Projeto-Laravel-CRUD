@extends('layouts.app')

@section('content')
    <h2>Detalhes do Produto</h2>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $produto->nome }}</h5>
            <p class="card-text"><strong>Descrição:</strong> {{ $produto->descricao ?: 'N/A' }}</p>
            <p class="card-text"><strong>Preço:</strong> R$ {{ number_format($produto->preco, 2, ',', '.') }}</p>
            <p class="card-text"><strong>Data de Validade:</strong> {{ $produto->data_validade->format('d/m/Y') }}</p>
            <p class="card-text"><strong>Status:</strong> <span class="badge {{ $produto->ativo ? 'bg-success' : 'bg-danger' }}">{{ $produto->ativo ? 'Ativo' : 'Inativo' }}</span></p>
        </div>
        <div class="card-footer">
            <a class="btn btn-primary" href="{{ route('produtos.index') }}">Voltar para a Lista</a>
        </div>
    </div>
@endsection