<x-zz.base_inicio>

    <x-slot:tituloHead>Inicio Juego</x-slot:tituloHead>
    <x-slot:titulo>Historia Interactiva</x-slot:titulo>

    <div>
        <button class="boton"><a href='{{ route('jugadores.create') }}'>Nueva partida</a> </button>
        <button class="boton"><a href='{{ route('partidas.index') }}'>Cargar partida</a> </button>

    </div>

</x-zz.base_inicio>
