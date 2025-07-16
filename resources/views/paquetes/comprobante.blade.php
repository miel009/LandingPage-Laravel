@extends('layout.main')

@section('content')

<section class="py-20 px-4 bg-transparent min-h-screen flex justify-center items-center">
    <div class="bg-white/90 backdrop-blur-md w-full max-w-3xl p-10 rounded-2xl shadow-2xl border border-gray-300">
        
        <div class="text-center mb-12 p-6 overflow-visible">
            <div class="container flex flex-col items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M12 2l7 4v5c0 5.25-3.5 9.75-7 11-3.5-1.25-7-5.75-7-11V6l7-4z" />
            </svg>
            <h2 class="text-3xl font-bold text-gray-800 mb-2">Reserva Confirmada!</h2>
            <p class="text-gray-600">Gracias por elegir <span class="font-semibold text-blue-600">NineTravel</span>.</p>
            </div>
        </div>

    <p><strong  class="text-gray-800 p-1" >Nombre:</strong> {{ $reserva->nombre_completo }}</p>
    <p><strong  class="text-gray-800 p-1" >Teléfono:</strong> {{ $reserva->telefono }}</p>
    <p><strong  class="text-gray-800 p-1" >Email:</strong> {{ $reserva->email }}</p>
    <p><strong  class="text-gray-800 p-1" >Personas:</strong> {{ $reserva->cantidad_personas }}</p>
    <p><strong  class="text-gray-800 p-1" >Fecha:</strong> {{ $reserva->created_at->format('d/m/Y H:i') }}</p>
    <p><strong  class="text-gray-800 p-1" >Mensaje:</strong> {{ $reserva->mensaje ?? 'No hay mensaje' }}</p>
    
    <div class="mt-6 text-center">
            <a href="{{ route('paquetes.index') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg transition">
                Volver a Paquetes
            </a>
    </div>
</div>
</section>

@endsection
