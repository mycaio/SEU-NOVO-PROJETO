@extends('layouts.app')
@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Categorias</h1>
    <a href="{{ route('categorias.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Nova Categoria</a>
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
            @foreach($categorias as $categoria)
            <tr>
                <td class="py-2 px-4 border">{{ $categoria->nome }}</td>
                <td class="py-2 px-4 border">
                    <a href="{{ route('categorias.edit', $categoria) }}" class="text-yellow-500">Editar</a> |
                    <form action="{{ route('categorias.destroy', $categoria) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500" onclick="return confirm('Tem certeza?')">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mt-4">{{ $categorias->links() }}</div>
</div>
@endsection
