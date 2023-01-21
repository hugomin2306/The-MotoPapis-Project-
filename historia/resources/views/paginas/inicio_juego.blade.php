<x-zz.base>

    <x-slot:tituloHead>Inicio Juego</x-slot:tituloHead>
    <x-slot:titulo>Historia Interactiva</x-slot:titulo>

    <a href='{{ route('jugadores.create') }}'>Nueva partida</a>
    <br />
    <a href='{{ route('partidas.index') }}'>Cargar partida</a>

</x-zz.base>
