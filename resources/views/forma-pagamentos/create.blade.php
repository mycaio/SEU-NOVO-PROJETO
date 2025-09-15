@extends('layouts.app')
@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Nova Forma de Pagamento</h1>
    <form action="{{ route('forma-pagamentos.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label class="block">Nome</label>
            <input type="text" name="nome" class="border rounded w-full p-2" value="{{ old('nome') }}">
            @error('nome')<span class="text-red-500">{{ $message }}</span>@enderror
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Salvar</button>
    </form>
</div>
@endsection
