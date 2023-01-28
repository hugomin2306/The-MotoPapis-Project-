<x-zz.base>

    <x-slot:tituloHead>Inicio Juego</x-slot:tituloHead>
    <x-slot:titulo>Historia Interactiva</x-slot:titulo>
    <style>
        h1{
            text-align: center;
        }
        table{
            display: flex;
            justify-content: center;
            text-align: center;
        }
    </style>

    <table>
        <tr>
            <th><a class="enlaces" href='{{ route('juegos.inicio_juego') }}'>Jugar partida</a></th>
        </tr>
        <tr>
            <th><a class="enlaces" href='{{ route('partidas.create') }}'>Crear historia</a></th>
        </tr>
    </table>

</x-zz.base>
