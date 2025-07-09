@extends('layout.main')

@section('content')

<div class="max-w-2xl mx-auto p-6 bg-white shadow rounded mb-8 mt-12">
    <h1 class="text-2xl font-bold mb-4">Reservar Paquete: {{ $paquete->titulo }}</h1>
    <p class="mb-4">{{ $paquete->descripcion }}</p>
    <p class="text-lg font-semibold mb-4">Precio: ${{ $paquete->precio }}</p>
</div>

<div class="max-w-4xl mx-auto p-6 bg-white shadow rounded mb-12">
<form action="{{ route('reservas.store') }}" method="POST" class="mt-6">
    @csrf

    <input type="hidden" name="paquete_id" value="{{ $paquete->id }}">

    <div class="mb-4">
        <label for="nombre_completo" class="block font-medium mb-1">Nombre completo</label>
        <input type="text" id="nombre_completo" name="nombre_completo" class="w-full border rounded px-3 py-2" required>
    </div>

    <div class="mb-4">
        <label for="email" class="block font-medium mb-1">Correo electrónico</label>
        <input type="email" id="email" name="email" class="w-full border rounded px-3 py-2" required>
    </div>

    <div class="mb-4">
        <label for="telefono" class="block font-medium mb-1">Teléfono</label>
        <input type="text" id="telefono" name="telefono" class="w-full border rounded px-3 py-2" required>
    </div>

    <div class="mb-4">
        <label for="cantidad_personas" class="block font-medium mb-1">Cantidad de personas</label>
        <input type="number" id="cantidad_personas" name="cantidad_personas" min="1" class="w-full border rounded px-3 py-2" required>
    </div>

    <div class="mb-4">
        <label for="mensaje" class="block font-medium mb-1">Mensaje (opcional)</label>
        <textarea id="mensaje" name="mensaje" class="w-full border rounded px-3 py-2"></textarea>
    </div>

    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Confirmar reserva</button>
</form>
</div>
@endsection




