@extends('layouts.app')
@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Editar Gasto</h1>
    <form action="{{ route('gastos.update', $gasto) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')
        <div>
            <label class="block">Descrição</label>
            <input type="text" name="descricao" class="border rounded w-full p-2" value="{{ old('descricao', $gasto->descricao) }}">
            @error('descricao')<span class="text-red-500">{{ $message }}</span>@enderror
        </div>
        <div>
            <label class="block">Valor</label>
            <input type="number" step="0.01" name="valor" class="border rounded w-full p-2" value="{{ old('valor', $gasto->valor) }}">
            @error('valor')<span class="text-red-500">{{ $message }}</span>@enderror
        </div>
        <div>
            <label class="block">Data</label>
            <input type="date" name="data" class="border rounded w-full p-2" value="{{ old('data', $gasto->data) }}">
            @error('data')<span class="text-red-500">{{ $message }}</span>@enderror
        </div>
        <div>
            <label class="block">Categoria</label>
            <select name="categoria_id" class="border rounded w-full p-2">
                <option value="">Selecione</option>
                @foreach($categorias as $categoria)
                    <option value="{{ $categoria->id }}" {{ old('categoria_id', $gasto->categoria_id) == $categoria->id ? 'selected' : '' }}>{{ $categoria->nome }}</option>
                @endforeach
            </select>
            @error('categoria_id')<span class="text-red-500">{{ $message }}</span>@enderror
        </div>
        <div>
            <label class="block">Forma de Pagamento</label>
            <select name="forma_pagamento_id" class="border rounded w-full p-2">
                <option value="">Selecione</option>
                @foreach($formas as $forma)
                    <option value="{{ $forma->id }}" {{ old('forma_pagamento_id', $gasto->forma_pagamento_id) == $forma->id ? 'selected' : '' }}>{{ $forma->nome }}</option>
                @endforeach
            </select>
            @error('forma_pagamento_id')<span class="text-red-500">{{ $message }}</span>@enderror
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Atualizar</button>
    </form>
</div>
@endsection
