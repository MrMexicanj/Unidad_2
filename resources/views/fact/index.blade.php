@extends('layouts.app')

@section('contenido')

<div class="max-w-md mt-10 mx-auto items-center">
    <h2 class="text-2xl font-bold mb-5 text-center">Facturas</h2>

    <h1 class="text-2xl font-bold mb-5 text-center">Factura Emisora</h1>
    <table class="mt-4 w-full border-collapse items-center">
        <thead>
            <tr>
                <th class="py-2 px-4 bg-gray-200 text-gray-700">ID</th>
                <th class="py-2 px-4 bg-gray-200 text-gray-700">Razon Social</th>
                <th class="py-2 px-4 bg-gray-200 text-gray-700">Email</th>
                <th class="py-2 px-4 bg-gray-200 text-gray-700">RFC</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($empresaemisoras as $empresaemisora)
            <tr>
                <td class="py-2 px-4 border">{{ $empresaemisora->id }}</td>
                <td class="py-2 px-4 border">{{ $empresaemisora->razon_social }}</td>
                <td class="py-2 px-4 border">{{ $empresaemisora->email }}</td>
                <td class="py-2 px-4 border">{{ $empresaemisora->rfc_emisor }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<a href="{{ route('posts.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
    Regresar
</a>

@endsection