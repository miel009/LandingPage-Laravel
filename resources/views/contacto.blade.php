@extends('layout.main')

@section('content')


<section class="bg-transparent py-16 px-6 lg:px-20">


  <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12">
    
    <!-- Información de contacto -->
    <div>
      <h2 class="text-3xl font-bold mb-6" style="color: #1466c3;" >Contacto</h2>
      <ul class="text-gray-700 space-y-4 text-lg">
        <li><strong>Dirección:</strong> Av. Caseros 3040, Buenos Aires, Argentina</li>
        <li><strong>Email:</strong> TravelNine@gmail.com</li>
        <li><strong>Teléfono:</strong> 4250-7030</li>
        <li><strong>WhatsApp:</strong> +54 9 11 2044-5680</li>
        <li><strong>Seguinos:</strong> para más novedades!</li>
      </ul>
    </div>

    <!-- Formulario de contacto -->
    <div>
      <h2 class="text-3xl font-bold mb-6 " style="color: #1466c3;" > Consultanos </h2>
      @if(session('success'))
    <div class="mb-4 p-4 bg-green-100 text-green-800 rounded-lg shadow">
        {{ session('success') }}
    </div>
    @endif
      <form action="{{ route('contacto.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
          <label class="block mb-1 text-sm text-gray-600">Nombre</label>
          <input type="text" name="nombre" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-200">
        </div>
        <div>
          <label class="block mb-1 text-sm text-gray-600">Correo electrónico</label>
          <input type="email" name="email" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-200">
        </div>
        <div>
          <label class="block mb-1 text-sm text-gray-600">Mensaje</label>
          <textarea name="mensaje" rows="4" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-200"></textarea>
        </div>
        <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">Enviar</button>
      </form>
    </div>
  </div>

  <!-- Cards destacadas -->
  <div class="mt-16 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
  <div class="p-6 border rounded-lg shadow-sm text-center">
    <div class="flex justify-center mb-4">
      <!-- Icono: Chat Bubble -->
      <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M21 12c0 4.418-4.03 8-9 8-1.676 0-3.24-.413-4.556-1.13L3 20l1.13-4.556C3.413 14.24 3 12.676 3 11c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
      </svg>
    </div>
    <h3 class="text-lg font-semibold text-gray-800">Atención 24/7</h3>
    <p class="text-sm text-gray-600">Chat, WhatsApp y mail 24hs.</p>
  </div>

  <div class="p-6 border rounded-lg shadow-sm text-center">
    <div class="flex justify-center mb-4">
      <!-- Icono: Star -->
      <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l2.062 6.344h6.675c.969 0 1.371 1.24.588 1.81l-5.402 3.928 2.062 6.344c.3.921-.755 1.688-1.538 1.118L12 17.772l-5.402 3.928c-.783.57-1.838-.197-1.538-1.118l2.062-6.344L1.72 11.081c-.783-.57-.38-1.81.588-1.81h6.675l2.066-6.344z" />
      </svg>
    </div>
    <h3 class="text-lg font-semibold text-gray-800">Alta Reputación</h3>
    <p class="text-sm text-gray-600">Recomendado por Tripadvisor y guías internacionales.</p>
  </div>

  <div class="p-6 border rounded-lg shadow-sm text-center">
    <div class="flex justify-center mb-4">
      <!-- Icono: Shield Check -->
      <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M12 2l7 4v5c0 5.25-3.5 9.75-7 11-3.5-1.25-7-5.75-7-11V6l7-4z" />
      </svg>
    </div>
    <h3 class="text-lg font-semibold text-gray-800">Reservas Seguras</h3>
    <p class="text-sm text-gray-600">Confirmación inmediata y servidor protegido.</p>
  </div>

  <div class="p-6 border rounded-lg shadow-sm text-center">
    <div class="flex justify-center mb-4">
      <!-- Icono: Currency Dollar -->
      <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-2.21 0-4-1.12-4-2.5S9.79 3 12 3s4 1.12 4 2.5-1.79 2.5-4 2.5zm0 0v8m0 0c2.21 0 4 1.12 4 2.5S14.21 21 12 21s-4-1.12-4-2.5 1.79-2.5 4-2.5z" />
      </svg>
    </div>
    <h3 class="text-lg font-semibold text-gray-800">Precios Competitivos</h3>
    <p class="text-sm text-gray-600">Supervisión constante para ofrecerte el mejor precio.</p>
  </div>
</div>

</section>



@endsection