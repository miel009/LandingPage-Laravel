@extends('layout.main')


@section('fullwidth')
   <div style="width: 100vw; max-width: 200%; overflow-x: hidden; margin-left: calc(-50vw + 50%); position: relative;">
    
    
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('assets/img/bariloche.jpg') }}" alt="Promociones" style="width: 100%; height: 300px; object-fit: cover;">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/img/cordoba.jpg') }}" alt="Promociones" style="width: 100%; height: 300px; object-fit: cover;">
            </div>
            <div class="carousel-item">
               <img src="{{ asset('assets/img/Pao_Azucar.jpg') }}" alt="Promociones" style="width: 100%; height: 300px; object-fit: cover;">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    </div>


@endsection

@section('content')


   <div class="container mt-0 p-3 mb-6">
    <p class="parrafo-index">
        Somos un grupo fundado en 2024 en permanente expansión y crecimiento.

        Somos un sitio de viajes, encontrando los mejores resultados, hoteles y paquetes.

        Gracias a esto, somos marca líder en Latinoamérica, jóven y flexible, y principal influencer de turismo
        para
        la inspiración, búsqueda y compra de un nuevo viaje.
        <br>
        Nuestro objetivo es que puedas encontrar el viaje de tus sueños, y que puedas disfrutarlo al máximo.

    </p>
   
     <!-- pregs frecuentes-->
      <h3 class="preg"> Preguntas frecuentes </h3>
      
    <div class="grid gap-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 p-4 bg-white/20 backdrop-blur rounded-lg">
    
    <details class="p-4 border border-gray-300 rounded-lg bg-white/30 backdrop-blur shadow transition duration-300 hover:shadow-md">
        <summary class="font-semibold cursor-pointer">¿Qué canales de comunicación tiene TravelNine?</summary>
        <p class="mt-2 text-sm text-gray-800">
            Nuestro canal principal es el formulario de contacto. También estamos en Instagram y Facebook como NineTravel.
        </p>
    </details>

    <details class="p-4 border border-gray-300 rounded-lg bg-white/30 backdrop-blur shadow transition duration-300 hover:shadow-md">
        <summary class="font-semibold cursor-pointer">¿Qué opciones de alojamientos hay?</summary>
        <p class="mt-2 text-sm text-gray-800">
            Desde hoteles premium a hostales y departamentos familiares con cocinas equipadas.
        </p>
    </details>

    <details class="p-4 border border-gray-300 rounded-lg bg-white/30 backdrop-blur shadow transition duration-300 hover:shadow-md">
        <summary class="font-semibold cursor-pointer">¿Puedo cancelar/modificar mi reserva desde la web?</summary>
        <p class="mt-2 text-sm text-gray-800">
            No. Deberás completar el formulario para que te llamemos y gestionemos el cambio.
        </p>
    </details>

    <details class="p-4 border border-gray-300 rounded-lg bg-white/30 backdrop-blur shadow transition duration-300 hover:shadow-md">
        <summary class="font-semibold cursor-pointer">¿Puedo hacer consultas telefónicas?</summary>
        <p class="mt-2 text-sm text-gray-800">
            Sí, te llamamos luego de recibir tus datos por el formulario para atención personalizada.
        </p>
    </details>

    <details class="p-4 border border-gray-300 rounded-lg bg-white/30 backdrop-blur shadow transition duration-300 hover:shadow-md">
        <summary class="font-semibold cursor-pointer">¿Qué incluyen los paquetes?</summary>
        <p class="mt-2 text-sm text-gray-800">
            Transporte aéreo, traslados al hotel y transportes secundarios según la actividad.
        </p>
    </details>

    <details class="p-4 border border-gray-300 rounded-lg bg-white/30 backdrop-blur shadow transition duration-300 hover:shadow-md">
        <summary class="font-semibold cursor-pointer">¿Hay turismo accesible?</summary>
        <p class="mt-2 text-sm text-gray-800">
            Sí. Contamos con opciones personalizadas. Consultanos vía formulario.
        </p>
    </details>

    <details class="p-4 border border-gray-300 rounded-lg bg-white/30 backdrop-blur shadow transition duration-300 hover:shadow-md">
        <summary class="font-semibold cursor-pointer">¿Cómo enterarme de las mejores ofertas?</summary>
        <p class="mt-2 text-sm text-gray-800">
            Seguinos en redes sociales para recibir alertas y novedades.
        </p>
    </details>

    <details class="p-4 border border-gray-300 rounded-lg bg-white/30 backdrop-blur shadow transition duration-300 hover:shadow-md">
        <summary class="font-semibold cursor-pointer">¿Se puede comprar desde la página?</summary>
        <p class="mt-2 text-sm text-gray-800">
            No. Funcionamos como comparador de precios. Te llamamos luego del formulario.
        </p>
    </details>
</div>

<!-- termina pregs frecuentes-->
<!-- card noticias  -->   
<h3 class="preg"> Noticias </h3>

<div class="container my-5">
    <div class="row">
        <div class="col-md-12 mb-4">
            <div class="card horizontal-card">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="assets/img/noticias1.jpg" class="card-img-left img-fluid" alt="noticias">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <p class="text-muted">Hace 1 semana</p>
                            <h4 class="card-title">Jetsmart expande su red: conectará Asunción con Santiago de Chile</h4>
                            <p class="card-text">    Desde la próxima semana Jetsmart comenzará a conectar la ciudad Asunción con Santiago de Chile. Los vuelos, que serán operados con conexión en el Aeroparque Jorge Newbery de la ciudad de Buenos Aires, se presentan como una gran propuesta para la temporada de vacaciones de invierno….</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 mb-4">
            <div class="card horizontal-card">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="assets/img/noticias2.jpg" class="card-img-left img-fluid" alt="noticias2">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <p class="text-muted">Hace 2 dias </p>
                            <h5 class="card-title">Emirates busca tripulantes de cabina en Córdoba y Buenos Aires</h5>
                            <p class="card-text">La aerolínea con sede en Dubai, Emirates, lanzó una nueva convocatoria para tripulantes de cabina en Argentina. En esta oportunidad, las jornadas de evaluación se realizarán los días 23 y 25 de mayo en las ciudades de Buenos Aires y Córdoba, respectivamente. Entre los requisitos que deben cumplir…</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
</div> <!-- termina card noticias  -->
</div>
 <!-- breve descripcion, preguntas frecuentes y cards  -->


@endsection