<x-zz.base>

    <x-slot:tituloHead>Inicio Juego</x-slot:tituloHead>
    <x-slot:titulo>Historia Interactiva</x-slot:titulo>

    <div>
        <button class="boton"><a  href='{{ route('partidas.store') }}'>Jugar partida</a></button>
        <button class="boton"><a  href='{{ route('partidas.create') }}'>Crear historia</a></button>
    </div>

    <br> <br>

    <button class="boton"><a  href='{{ route('logout') }}'>Log Out</a></button>



</x-zz.base>
