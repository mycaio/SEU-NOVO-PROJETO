<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Controle de Gastos')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen">
    <nav class="bg-blue-600 text-white p-4 mb-6">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="font-bold text-lg">Controle de Gastos</a>
            <div class="space-x-4">
                <a href="{{ route('gastos.index') }}" class="hover:underline">Gastos</a>
                <a href="{{ route('categorias.index') }}" class="hover:underline">Categorias</a>
                <a href="{{ route('forma-pagamentos.index') }}" class="hover:underline">Formas de Pagamento</a>
            </div>
        </div>
    </nav>
    <main>
        @yield('content')
    </main>
</body>
</html>
