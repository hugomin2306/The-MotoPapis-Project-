<x-zz.base>

    <x-slot:tituloHead>Partidas</x-slot:tituloHead>
    <x-slot:titulo>Listado de partidas</x-slot:titulo>

    <table>

    <tr>
        <th>Partida</th>
        <th>ID_Jugador</th>
        <th>Fecha de inicio</th>
        <th>Fecha de fin</th>
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
                <form action='{{ route('partidas.destroy', $partidas) }}' method='post'>
                    @method('delete')
                    @csrf

                    <button type='submit'>(X)</button>
                </form>
            </td>
        </tr>
    @endforeach

    </table><br><br>

    <button class="boton"><a href='{{ route('partidas.create') }}'>Crear partida</a></button>
    <br>
    <br>
    <button  class="boton"><a href='{{ route('nodos.index') }}'>Listado de páginas</a></button>

</x-zz.base>
