@extends('layout.main')
@php
    use Illuminate\Support\Str;
@endphp
@section('fullwidth')
   <div style="width: 100vw; max-width: 200%; overflow-x: hidden; margin-left: calc(-50vw + 50%); position: relative;">
    <img src="{{ asset('assets/img/paq.webp') }}" alt="Promociones" style="width: 100%; height: 300px; object-fit: cover;">
    
</div>

    </div>
@endsection
@section('content')


<div  class="container p-4">

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-14 mt-14">
    
    @foreach ($paquetes as $paquete)
        <div class="border p-4 rounded shadow h-full flex flex-col">
        <!-- verifica si img viene de bd o assets, y si es valida  -->
        @if($paquete->imagen_url)
            <img src="{{ $paquete->imagen_url }}" alt="{{ $paquete->titulo }}" class="w-full h-40 object-cover rounded mb-4">
        @else
            <img src="{{ asset('assets/img/.jpg') }}" alt="" class="w-full h-40 object-cover rounded mb-4">
        @endif         
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
</div>

@endsection