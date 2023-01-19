<x-zz.base>

    <x-slot:tituloHead>Partidas</x-slot:tituloHead>
    <x-slot:titulo>Listado de partidas</x-slot:titulo>

    <table>

    <tr>
        <th>Partida</th>
        <th>ID_Jugador</th>
        <th>Fecha de inicio</th>
        <th>Fecha de fin</th>
        <th>Minutos jugados</th>
        <th>Eliminar</th>
    </tr>

    @foreach ($partida as $partidas)
        <tr>
            <td>
                <a href='{{ route('partidas.show', $partidas) }}'>{{ $partidas->id }}</a>
            </td>
            <td>
                <a href='{{ route('partidas.show', $partidas) }}'>{{ $partidas->id_jugador }}</a>
            </td>
            <td>
                <a href='{{ route('partidas.show', $partidas) }}'>{{ $partidas->fecha_inicio }}</a>
            </td>
            <td>
                <a href='{{ route('partidas.show', $partidas) }}'>{{ $partidas->fecha_fin }}</a>
            </td>
            <td>
                <a href='{{ route('partidas.show', $partidas) }}'>{{ $partidas->minutos_jugados }}</a>
            </td>
            <td>
                <form action='{{ route('partidas.destroy', $partidas) }}' method='post'>
                    @method('delete')
                    @csrf

                    <button type='submit'>(X)</button>
                </form>
            </td>
        </tr>
    @endforeach

    </table><br><br>

    <button><a href='{{ route('partidas.create') }}'>Crear</a></button><br><br>

    <a href='{{ route('partidas.index') }}'>Listado de Nodos</a>

</x-zz.base>
