<x-zz.base_inicio>

    <x-slot:tituloHead>Bienvenid@s!!!!</x-slot:tituloHead>
    <x-slot:titulo>Historia Interactiva</x-slot:titulo>

    <div>
        <button class="boton"><a href='{{ route('jugadores.login') }}'>Iniciar Sesion</a></button>
        <button class="boton"><a href='{{ route('jugadores.create') }}'>Registrarse</a></button>

    </div>

</x-zz.base_inicio>
