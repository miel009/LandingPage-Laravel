@extends('layout.main')

@section('content')

<div class="max-w-md mx-auto p-4 border rounded shadow">
    <h2 class="text-xl font-bold mb-4">Reserva confirmada</h2>
    

    <p><strong>Nombre:</strong> {{ $reserva->nombre_completo }}</p>
    <p><strong>Email:</strong> {{ $reserva->email }}</p>
    <p><strong>Teléfono:</strong> {{ $reserva->telefono }}</p>
    <p><strong>Personas:</strong> {{ $reserva->cantidad_personas }}</p>
    <p><strong>Paquete:</strong> {{ $reserva->paquete->nombre ?? 'No disponible' }}</p>
    <p><strong>Fecha:</strong> {{ $reserva->created_at->format('d/m/Y H:i') }}</p>
    <p><strong>Mensaje:</strong> {{ $reserva->mensaje ?? 'No hay mensaje' }}</p>
    <a href="{{ route('paquetes.index') }}" class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded">Volver</a>
</div>

@endsection
