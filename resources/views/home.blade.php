@extends('layout.main')

@section('content')


<main>

    <div class="cards-container">
        <h2 class="descripcion"> Quienes somos </h2>
        <p class="parrafo-index">
            Somos un grupo fundado en 2024 en permanente expansión y crecimiento.

            Somos un sitio de viajes, encontrando los mejores resultados, hoteles y paquetes.

            Gracias a esto, somos marca líder en Latinoamérica, jóven y flexible, y principal influencer de turismo
            para
            la inspiración, búsqueda y compra de un nuevo viaje.
        </p>
        <p class="p-seguinos">
            Lo que somos, es lo que hacemos: Seguinos en nuestras redes o registrate mediante nuestro formulario de contacto y recibí las mejores ofertas en hoteles, aereos, paquetes y más.
        </p>
          
       
    <h3 class="preg"> Preguntas frecuentes </h3>
    </div>

     <!-- pregs frecuentes-->
     <div class="containerPreg md-6">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="accordion" id="accordionExample1">
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingOne1">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1">
                                ¿Que canales de comunicacion tiene TravelNine?
                            </button>
                        </h3>
                        <div id="collapseOne1" class="accordion-collapse collapse" aria-labelledby="headingOne1" data-bs-parent="#accordionExample1">
                            <div class="accordion-body">
                                Nuestro canal de comunicacion por excelencia es via formulario de contacto, y posteriormente llamado para una atencion personalizada. Pero tambien puede encontrarnos por Instagram y Facebook como NineTravel.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingTwo1">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo1">
                                ¿Qué opciones de alojamientos se pueden encontrar en TravelNine?
                            </button>
                        </h3>
                        <div id="collapseTwo1" class="accordion-collapse collapse" aria-labelledby="headingTwo1" data-bs-parent="#accordionExample1">
                            <div class="accordion-body">
                                Contamos con variedad de opciones para una experiencia inolvidable, desde hoteles premium a hoteles lowcost y apartamentos para familias o para quienes buscan estadías largas y prefieren facilidades en espacios de laundry y cocinas equipadas, como también hostales.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingThree1">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree1" aria-expanded="false" aria-controls="collapseThree1">
                                Puedo cancelar o modificar mi reserva a través de la pagina web?
                            </button>
                        </h3>
                        <div id="collapseThree1" class="accordion-collapse collapse" aria-labelledby="headingThree1" data-bs-parent="#accordionExample1">
                            <div class="accordion-body">
                                No. Debés llamarnos o dejarnos información mediante el formulario de contacto asi te llamamos y gestinamos la cancelacion.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingFour1">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour1" aria-expanded="false" aria-controls="collapseFour1">
                                ¿Es posible hacer consultas telefónicas con TravelNine?
                            </button>
                        </h3>
                        <div id="collapseFour1" class="accordion-collapse collapse" aria-labelledby="headingFour1" data-bs-parent="#accordionExample1">
                            <div class="accordion-body">
                                Si, a traves de los datos que nos deje en el formulario el sector de ventas se comunica directamente via telefonia para ofrecerle opciones personalizadas dependiendo de sus necesidaes.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="accordion" id="accordionExample2">
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingOne2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne2" aria-expanded="false" aria-controls="collapseOne2">
                                ¿Que incluye los paquetes?
                            </button>
                        </h3>
                        <div id="collapseOne2" class="accordion-collapse collapse" aria-labelledby="headingOne2" data-bs-parent="#accordionExample2">
                            <div class="accordion-body">
                                Incluimos transporte aéreo y traslados al hotel, y si es necesario transportes secundarios para hacer los tours, dependiendo de la actividad que se realice.
                                Para más detalles e información no dude en consultarnos mediante el formulario de contacto. ¡Gracias!
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingTwo2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                                ¿Hay opciones de turismo accesible?
                            </button>
                        </h3>
                        <div id="collapseTwo2" class="accordion-collapse collapse" aria-labelledby="headingTwo2" data-bs-parent="#accordionExample2">
                            <div class="accordion-body">
                                Sí, contamos con paquetes personalizados para una mejor experiencia.
                                Invitamos a consultarnos para más información mediante el formulario de contacto. ¡Gracias!
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingThree2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree2" aria-expanded="false" aria-controls="collapseThree2">
                                ¿Cómo puedo enterarme de las mejores ofertas?
                            </button>
                        </h3>
                        <div id="collapseThree2" class="accordion-collapse collapse" aria-labelledby="headingThree2" data-bs-parent="#accordionExample2">
                            <div class="accordion-body">
                                Seguinos en nuestras redes sociales para recibir alertas de vuelos baratos y hoteles, entre otras novedades
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingFour2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour2" aria-expanded="false" aria-controls="collapseFour2">
                                ¿Se puede comprar a través de la pagina?
                            </button>
                        </h3>
                        <div id="collapseFour2" class="accordion-collapse collapse" aria-labelledby="headingFour2" data-bs-parent="#accordionExample2">
                            <div class="accordion-body">
                                No, funciona como comparador de precios. Se gestiona la reserva mediante llamada directa, nos dejan sus datos y la consulta por el formulario de contacto, y en la brevedad nos comunicamos para ofrecerle una experiencia personalizada.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
</div>

</main>

@endsection