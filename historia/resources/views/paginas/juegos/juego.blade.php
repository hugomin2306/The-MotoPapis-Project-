<x-zz.base_inicio>

    <x-slot:tituloHead>Inicio Juego</x-slot:tituloHead>
    <x-slot:titulo>Historia Interactiva</x-slot:titulo>

    <div>
        @can('partidas.index')
        <button class="boton"><a  href='{{ route('partidas.store') }}'>Jugar partida</a></button>
        @endcan


            @can('partidas.create')
            <button class="boton"><a  href='{{ route('partidas.create') }}'>Crear historia</a>
            @endcan

        </button>
    </div>

    <br> <br>





</x-zz.base_inicio>
