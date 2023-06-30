<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Unidad 2</title>
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')

        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/app.js') }}"></script>
        <!-- Styles -->
    </head>
    <body class="bg-gray-200">
       <header class="p-5 border-b bg-lime-300 shadow">
        <!-- Se define el contenedor -->
            <div class="container mx-auto flex justify-between items-center">
                <h1 class="text-3xl font-black">
                    Evaluación U2
                </h1>
                    <!-- separa login y registro (se almacenas los enlaces para los registros)-->
                    <nav class="flex gap-3">
                        <a class="font-bold uppercase text-black text-sm" href="/login">Login</a>
                        <a class="font-bold uppercase text-black text-sm" href="/registro">Registro</a
                    <nav>
            </div>
       </header>
       <!-- se inserta el contenido que comparten las paginas-->
       <main class="container mx-auto mt-10">
            <h2 class="font-black text-center text-3xl mb-10">
                @yield('titulo')
            </h2>
        @yield('contenido')
       </main>
    </body>
</html>