@extends('layouts.app')
@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Detalhes do Gasto</h1>
    <div class="bg-white p-4 rounded shadow">
        <p><strong>Descrição:</strong> {{ $gasto->descricao }}</p>
        <p><strong>Valor:</strong> R$ {{ number_format($gasto->valor, 2, ',', '.') }}</p>
        <p><strong>Data:</strong> {{ $gasto->data }}</p>
        <p><strong>Categoria:</strong> {{ $gasto->categoria->nome ?? '-' }}</p>
        <p><strong>Forma de Pagamento:</strong> {{ $gasto->formaPagamento->nome ?? '-' }}</p>
    </div>
    <a href="{{ route('gastos.index') }}" class="mt-4 inline-block bg-gray-500 text-white px-4 py-2 rounded">Voltar</a>
</div>
@endsection
