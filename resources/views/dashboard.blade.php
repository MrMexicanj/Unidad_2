@extends('layouts.app')

@section('titulo')
    ADMIN 
@endsection

@section('contenido')

    <div class="flex justify-center">
        <div class="inline-flex rounded-md shadow-sm">
        <a href="#" class="px-4 py-2 text-sm font-medium text-blue-700 bg-white border border-gray-200 rounded-l-lg hover:bg-gray-100 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white" 
            onclick="showForm('empresaEmisoraForm')">
            REGISTRO EMPRESA EMISORA
        </a>
        <a href="#" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white"
            onclick="showForm('empresaReceptoraForm')">
            REGISTRO EMPRESA RECEPTORA
        </a>
        <a href="#" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
            REGISTRAR FACTURA
        </a>
        <a href="#" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-r-md hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
            LISTADO DE FACTURAS
        </a>
        </div>  
    </div>

    <div class="max-w-md mx-auto mt-10">
        <div id="empresaEmisoraForm" class="hidden">
            <div class="bg-slate-300 p-6 rounded-lg shadow-xl">
            <h1 class="text-2xl font-bold mb-5 text-center">Empresa Emisora</h1>

            <!-- Campos del formulario para EMPRESA EMISORA -->
            <form id="formulario1" class="max-w-md mx-auto" action="{{ route('EmpresaE.store')}}" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="id" class="block text-gray-700 font-bold mb-2">ID:</label>
                    <input type="text" id="id" name="id"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                        required>
                </div>
                <div class="mb-5">
                    <label for="razon_social" class="block text-gray-700 font-bold mb-2">Razón Social:</label>
                    <input type="text" id="razon_social" name="razon_social"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                        required>
                </div>
                <div class="mb-5">
                    <label for="email" class="block text-gray-700 font-bold mb-2">Correo de
                        Contacto:</label>
                    <input type="email" id="email" name="email"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                        required>
                </div>
                <div class="mb-5">
                    <label for="rfc_emisor" class="block text-gray-700 font-bold mb-2">RFC Emisor:</label>
                    <input type="text" id="rfc_emisor" name="rfc_emisor"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                        required>
                </div>
                <button type="submit"
                    class="bg-indigo-500 text-white px-4 py-2 rounded-md hover:bg-indigo-600">Guardar</button>
            </form>
            </div>
        </div>
    </div>

    <div class="max-w-md mx-auto mt-10">
        <div id="empresaReceptoraForm" class="hidden">
            <div class="bg-slate-300 p-6 rounded-lg shadow-xl">
            <h1 class="text-2xl font-bold mb-5 text-center">Empresa Receptora</h1>

            <!-- Campos del formulario para EMPRESA RECEPTORA -->
            <form id="formulario2" class="max-w-md mx-auto" action="{{ route('EmpresaR.store')}}" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="id" class="block text-gray-700 font-bold mb-2">ID:</label>
                    <input type="text" id="id" name="id"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                        required>
                </div>
                <div class="mb-5">
                    <label for="nombre" class="block text-gray-700 font-bold mb-2">Nombre:</label>
                    <input type="text" id="nombre" name="nombre"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                        required>
                </div>
                <div class="mb-5">
                    <label for="direccion" class="block text-gray-700 font-bold mb-2">Direccion:</label>
                    <input type="text" id="direccion" name="direccion"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                        required>
                </div>
                <div class="mb-5">
                    <label for="rfc" class="block text-gray-700 font-bold mb-2">RFC:</label>
                    <input type="text" id="rfc" name="rfc"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                        required>
                </div>
                <div class="mb-5">
                    <label for="contacto" class="block text-gray-700 font-bold mb-2">Contacto:</label>
                    <input type="text" id="contacto" name="contacto"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                        required>
                </div>
                <div class="mb-5">
                    <label for="email" class="block text-gray-700 font-bold mb-2">Email:</label>
                    <input type="email" id="email" name="email"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                        required>
                </div>
                <button type="submit"
                    class="bg-indigo-500 text-white px-4 py-2 rounded-md hover:bg-indigo-600">Guardar</button>
            </form>
            </div>
        </div>
    </div>
</div>

  
<script>
    function showForm(formId) {
        // Ocultar todos los formularios
        const forms = document.querySelectorAll('div[id$="Form"]');
        forms.forEach(form => form.style.display = 'none');

        // Mostrar el formulario correspondiente al formId recibido
        const formToShow = document.getElementById(formId);
        formToShow.style.display = 'block';
    }
</script>

@endsection

