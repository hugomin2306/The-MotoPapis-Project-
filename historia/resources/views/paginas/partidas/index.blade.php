<x-zz.base_inicio>

    <x-slot:tituloHead>Partidas</x-slot:tituloHead>
    <x-slot:titulo>Listado de partidas</x-slot:titulo>

    <table>

    <tr>
        <th>Partida</th>
        <th>Jugador</th>
        <th>Fecha de inicio</th>
        <th>Jugar</th>
        <th>Eliminar</th>
    </tr>

    @foreach ($partida as $partidas)
        <tr>
            <td>
                <a href='{{ route('nodos.index', $partidas) }}'>{{ $partidas->id }}</a>
            </td>
            <td>
                <a href='{{ route('users.show', $partidas) }}'>{{ $user->username }}</a>
            </td>
            <td>
                <a href='{{ route('nodos.index', $partidas) }}'>{{ $partidas->fecha_inicio }}</a>
            </td>

            <td>
                <a href='{{ route('nodos.show', $partidas) }}'>Jugar</a>
            </td>

            <td>
                <form action='{{ route('partidas.destroy', $partidas) }}' method='post'>
                    @method('delete')
                    @csrf

                    <button class="botonEliminar" type='submit'>(X)</button>
                </form>
            </td>
        </tr>
    @endforeach

    </table><br><br>

    <form action='{{ route('partidas.store') }}' method='post'>
        @method('post')
        @csrf

        <button type='submit'>Crear Partida</button>
    </form>
    <br>
    <br>
    <button  class="boton"><a href='{{ route('nodos.index') }}'>Listado de páginas</a></button>

</x-zz.base_inicio>
