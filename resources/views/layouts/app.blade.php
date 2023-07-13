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
        @stack('styles')
    </head>
    <body background="imagenes/1920x1080-Imagen-de-fondo-purpura-24.jpg">
       <header class="p-5 border-b bg-gray-500 shadow">
        <!-- Se define el contenedor -->
            <div class="container mx-auto flex justify-between items-center">
                <h1 class="text-3xl font-black">
                    Evaluación U2
                </h1>
                @auth
                    <!-- verifica si el usario esta autenticado (si es asi muestra esto) -->
                <nav>
                    <!-- lo renvia a la vista login -->
                    <a href="{{ route('logout') }}" class="font-bold uppercase text-gray-600 text-sm">
                        Cerrar Sesíon
                    </a>
                </nav>
                @endauth
                <!-- (gest) Determinar si el ausuario no autenticado -->
                @guest
                <nav class="flex gap-2 items-center">
                <a class="font-bold uppercase text-gray-600 text-sm" href="{{ route('login')}}">Login</a>  
                <a class="font-bold uppercase text-gray-600 text-sm" href="/registro">Crear Cuenta</a>     
                </nav>
                @endguest
            </div>
       </header>
       <!-- se inserta el contenido que comparten las paginas-->
       <main class="container mx-auto mt-10">
            <h2 class="font-black text-center text-3xl mb-10">
                @yield('titulo')
            </h2>
        @yield('contenido')
       </main>
       <!-- Pie de pagina -->
       <footer class="mt-10 text-center p-5 text-white font-bold">
        Todos los derechos reservados {{ now()->year }}
    </footer>
    </body>
</html>