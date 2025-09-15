@extends('layouts.app')
@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Gastos</h1>
    <a href="{{ route('gastos.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Novo Gasto</a>
    @if(session('success'))
        <div class="bg-green-100 text-green-800 p-2 mb-2 rounded">{{ session('success') }}</div>
    @endif
    <table class="min-w-full bg-white border">
        <thead>
            <tr>
                <th class="py-2 px-4 border">Descrição</th>
                <th class="py-2 px-4 border">Valor</th>
                <th class="py-2 px-4 border">Data</th>
                <th class="py-2 px-4 border">Categoria</th>
                <th class="py-2 px-4 border">Forma Pagamento</th>
                <th class="py-2 px-4 border">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($gastos as $gasto)
            <tr>
                <td class="py-2 px-4 border">{{ $gasto->descricao }}</td>
                <td class="py-2 px-4 border">R$ {{ number_format($gasto->valor, 2, ',', '.') }}</td>
                <td class="py-2 px-4 border">{{ $gasto->data }}</td>
                <td class="py-2 px-4 border">{{ $gasto->categoria->nome ?? '-' }}</td>
                <td class="py-2 px-4 border">{{ $gasto->formaPagamento->nome ?? '-' }}</td>
                <td class="py-2 px-4 border">
                    <a href="{{ route('gastos.show', $gasto) }}" class="text-blue-500">Ver</a> |
                    <a href="{{ route('gastos.edit', $gasto) }}" class="text-yellow-500">Editar</a> |
                    <form action="{{ route('gastos.destroy', $gasto) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500" onclick="return confirm('Tem certeza?')">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mt-4">{{ $gastos->links() }}</div>
</div>
@endsection
