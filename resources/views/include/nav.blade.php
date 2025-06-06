<div class="navbar">
    <img class="LogoNineT" src="assets/img/logotex.png" alt="logo">
    <nav id="menu_list">
        <ul>
            <li><a href="{{route('/')}}" title="Inicio"> Inicio <div class="bi bi-house-fill"></div> <span class="icon_text"></span></a></li>
            <li><a href="{{route('destino')}}" title="Destinos"><div class="bi bi-geo-fill"></div> <span class="icon_text">Destinos</span> </a></li>
            <li><a href="{{route('paquete')}}" title="Paquetes"><div class="bi bi-folder-fill"></div> <span class="icon_text">Paquetes</span> </a></li>
            <li><a href="{{route('reserva')}}" title="Reserva"><div class="bi bi-person-badge"></div> <span class="icon_text">Reserva</span> </a></li>
        </ul>
    </nav>
    <div id="list" onclick="toggleMenu()">
        <i class="bi bi-list"></i>
    </div>
</div>