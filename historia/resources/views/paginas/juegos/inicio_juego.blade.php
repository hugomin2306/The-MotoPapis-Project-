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
            <th><a href='{{ route('jugadores.create') }}'>Nueva partida</a></th>
        </tr>
        <tr>
            <th><a href='{{ route('partidas.index') }}'>Cargar partida</a></th>
        </tr>
    </table>

</x-zz.base>
