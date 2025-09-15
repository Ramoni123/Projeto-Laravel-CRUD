@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Listagem de Produtos</h2>
        <a class="btn btn-success" href="{{ route('produtos.create') }}">Criar Novo Produto</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Preço</th>
                <th>Validade</th>
                <th>Ativo?</th>
                <th width="220px">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produtos as $produto)
            <tr>
                <td>{{ $produto->nome }}</td>
                <td>R$ {{ number_format($produto->preco, 2, ',', '.') }}</td>
                <td>{{ $produto->data_validade->format('d/m/Y') }}</td>
                <td>{{ $produto->ativo ? 'Sim' : 'Não' }}</td>
                <td>
                    <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST">
                        <a class="btn btn-info btn-sm" href="{{ route('produtos.show', $produto->id) }}">Ver</a>
                        <a class="btn btn-primary btn-sm" href="{{ route('produtos.edit', $produto->id) }}">Editar</a>
                        
                        @csrf
                        @method('DELETE')
      
                        <button type="submit" class="btn btn-danger btn-sm">Apagar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {!! $produtos->links() !!}
@endsection