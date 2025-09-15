@extends('layouts.app')
@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Formas de Pagamento</h1>
    <a href="{{ route('forma-pagamentos.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Nova Forma de Pagamento</a>
    @if(session('success'))
        <div class="bg-green-100 text-green-800 p-2 mb-2 rounded">{{ session('success') }}</div>
    @endif
    <table class="min-w-full bg-white border">
        <thead>
            <tr>
                <th class="py-2 px-4 border">Nome</th>
                <th class="py-2 px-4 border">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($formas as $forma)
            <tr>
                <td class="py-2 px-4 border">{{ $forma->nome }}</td>
                <td class="py-2 px-4 border">
                    <a href="{{ route('forma-pagamentos.edit', $forma) }}" class="text-yellow-500">Editar</a> |
                    <form action="{{ route('forma-pagamentos.destroy', $forma) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500" onclick="return confirm('Tem certeza?')">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mt-4">{{ $formas->links() }}</div>
</div>
@endsection
