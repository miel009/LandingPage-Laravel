<div class="navbar">
<img class="LogoNineT" src="{{ asset('assets/img/logotex.png') }}" alt="logo">    <nav id="menu_list">
        <ul>

            <li><a href="{{route('/')}}" title="Inicio"> Inicio <div class="bi bi-house-fill"></div> <span class="icon_text"></span></a></li>           
            <li><a href="{{route('paquetes.index')}}" title="Paquetes"><div class="bi bi-folder-fill"></div> <span class="icon_text">Paquetes</span> </a></li>
            <li><a href="{{route('contacto')}}" title="Contacto"><div class="bi bi-person-badge"></div> <span class="icon_text">Contacto</span> </a></li>

           
        </ul>
    </nav>
    <div id="list" onclick="toggleMenu()">
        <i class="bi bi-list"></i>
    </div>
</div>