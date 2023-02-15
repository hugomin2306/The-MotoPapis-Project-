<x-zz.base_inicio>

    <x-slot:tituloHead>Partidas</x-slot:tituloHead>
    <x-slot:titulo>Listado de partidas</x-slot:titulo>

    <table>

    <tr>
        @can('nodos.index')
        <th>Partida</th>
        <th>ID_Jugador</th>
        <th>Fecha de inicio</th>
        @endcan
        <th>Jugar</th>
        @can('nodos.index')
        <th>Eliminar</th>
        @endcan
    </tr>

    @foreach ($partida as $partidas)
        <tr>
            <td>
                @can('nodos.index')
                <a href='{{ route('nodos.index', $partidas) }}'>{{ $partidas->id }}</a>
                @endcan
            </td>
            <td> @can('nodos.index')
                <a href='{{ route('nodos.index', $partidas) }}'>{{ $partidas->id_jugador }}</a>
                 @endcan
            </td>
            <td> @can('nodos.index')
                <a href='{{ route('nodos.index', $partidas) }}'>{{ $partidas->fecha_inicio }}</a>
                @endcan
            </td>
            <td>
                <a href='{{ route('nodos.show', $partidas) }}'>(X)</a>

            </td>

            <td>
                <a href='{{ route('nodos.show', $partidas) }}'>Jugar</a>
            </td>

            <td> @can('partidas.destroy')
                <form action='{{ route('partidas.destroy', $partidas) }}' method='post'>
                    @method('delete')
                    @csrf

                    <button class="botonEliminar" type='submit'>(X)</button>
                </form>
                @endcan
            </td>
        </tr>
    @endforeach

    </table><br><br>

    <form action='{{ route('partidas.index') }}' method='post'>
        @method('post')
        @csrf
        @can('partidas.store')
        <button type='submit'>Crear Partida</button>
        @endcan

    </form>
    <br>
    <br>
    @can('nodos.index')
    <button  class="boton"><a href='{{ route('nodos.index') }}'>Listado de páginas</a></button>
    @endcan

</x-zz.base_inicio>
