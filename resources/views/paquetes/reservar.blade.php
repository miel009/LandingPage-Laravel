@extends('layout.main')
@php
    use Illuminate\Support\Str;
@endphp
@section('content')

<div class="max-w-6xl mx-auto mt-12 mb-12 p-6 bg-white shadow rounded-lg flex flex-col md:flex-row gap-8">

    
<div class="w-full md:w-1/2"> <!-- 2do div princ -->   
         <h1 class="text-2xl font-bold mb-4">Reservar Paquete: {{ $paquete->titulo }}</h1>

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

    <!-- 2do div princ -->  
    <div class="w-full md:w-1/2">
        @if($paquete->imagen_url)
            <img src="{{ $paquete->imagen_url }}" alt="{{ $paquete->titulo }}" class="w-full h-64 object-cover rounded mb-4">
        @else
            <img src="{{ asset('assets/img/.jpg') }}" alt="" class="w-full h-64 object-cover rounded mb-4">
        @endif

        <p class="mb-4">{{ $paquete->descripcion }}</p>
        <p class="text-lg font-semibold">Precio: ${{ $paquete->precio }}</p>
    </div> 
   
</div>
@endsection




