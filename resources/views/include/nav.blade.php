<div class="navbar">
<img class="LogoNineT" src="{{ asset('assets/img/logotex.png') }}" alt="logo">    <nav id="menu_list">
        <ul>
            

            <li><a href="{{route('/')}}" title="Inicio"> <div class="bi bi-people"></div> <span class="icon_text">Inicio</span></a></li>           
            <li><a href="{{route('paquetes.index')}}" title="Paquetes"><div class="bi bi-airplane"></div> <span class="icon_text">Paquetes</span> </a></li>
            <li><a href="{{route('contacto')}}" title="Contacto"><div class="bi bi-person-badge"></div> <span class="icon_text">Contacto</span> </a></li>
            @auth
        <li>
            <a href="#">
                <div class="bi bi-person-circle"></div>
                <span class="icon_text">{{ Auth::user()->name }}</span>
            </a>
        </li>
        <li>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="flex items-center border-0 bg-transparent p-0">
                    <div class="bi bi-box-arrow-right"></div>
                    <span class="icon_text">Cerrar sesión</span>
                </button>
            </form>
        </li>
    @else
        <li><a href="{{ route('register') }}"><div class="bi bi-person-plus"></div><span class="icon_text">Registrarse</span></a></li>
        <li><a href="{{ route('login') }}"><div class="bi bi-box-arrow-in-right"></div><span class="icon_text">Login</span></a></li>
    @endauth
           
        </ul>
    </nav>
    <div id="list" onclick="toggleMenu()">
        <i class="bi bi-list"></i>
    </div>
</div>