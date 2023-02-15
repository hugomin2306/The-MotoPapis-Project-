<nav id="menu">
    <div id="contenidoMenu">
        <a class="elementoMenu" href='{{ route('juego') }}'>Inicio</a>
        <a class="elementoMenu" href='{{ route('partidas.index') }}'>Partidas</a>
        @can('nodos.index')<a class="elementoMenu" href='{{ route('nodos.index')  }}'>Nodos</a>@endcan
        <a class="elementoMenu" href='{{ route('users.show', Auth::user()) }}'>Ver perfil</a>
        <a class="elementoMenu" href='{{ route('logout') }}'>Cerrar Sesión</a>
    </div>
</nav>
