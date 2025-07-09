@extends('layout.main')
@section('content')

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-14 mt-14">
    @foreach ($paquetes as $paquete)
        <div class="border p-4 rounded shadow h-full flex flex-col">
            <img src="{{ asset('storage/' . $paquete->imagen) }}" alt="{{ $paquete->titulo }}" class="w-full h-40 object-cover rounded mb-4">
            <h2 class="text-lg font-bold mb-2">{{ $paquete->titulo }}</h2>
            <p class="mb-2 flex-grow">{{ $paquete->descripcion }}</p>
            <p class="mb-4"><strong>Precio:</strong> ${{ $paquete->precio }}</p>
            <div class="mt-auto">
                <a href="{{ route('paquetes.reservar', ['paquete' => $paquete->id]) }}"
                   class="inline-block px-3 py-1 text-sm bg-blue-500 text-white rounded hover:bg-blue-600 transition">
                   Reservar
                </a>
            </div>
        </div>
    @endforeach
</div>

@endsection