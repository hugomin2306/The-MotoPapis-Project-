<nav id="menu">
    <div id="contenidoMenu">
        <a class="elementoMenu" href='{{ route('juego') }}'>Inicio</a>
        <a class="elementoMenu" href='{{ route('users.show', Auth::user())  }}'>Ver perfil</a>
        <a class="elementoMenu" href='{{ route('logout') }}'>Cerrar sesión</a>
    </div>
</nav>
