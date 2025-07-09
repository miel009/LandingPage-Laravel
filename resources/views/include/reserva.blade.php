<h1  class="text-center mb-0"> Generar reserva : </h1>


    <form method="POST" action=""> 
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="nombre_destino" placeholder="Destino" required>
        <input type="date" name="fecha_reserva" required>
        <input type="number" name="numero_personas" placeholder="Número de Personas" required>
        <button type="submit" class="btn btn-primary" > Lo quiero! <a href="{{ url('') }}"> </a></button>
    </form>

    <div class="text-center mt-4">
        <a href="" class="btn btn-primary"> Mis reservas </a>
    </div>