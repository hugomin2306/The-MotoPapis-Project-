<x-zz.base_inicio>

    <x-slot:tituloHead>Partidas</x-slot:tituloHead>
    <x-slot:titulo>Listado de partidas</x-slot:titulo>

    <table>

    <tr>
        <th>Partida</th>
        <th>Nombre Jugador</th>
        <th>Fecha de inicio</th>
        <th>Jugar</th>
        <th>Eliminar</th>
    </tr>

    @foreach ($partida as $partidaCampos)
        <tr>
            <td>
                <a href='{{ route('nodos.index', $partidaCampos) }}'>{{ $partidaCampos->id }}</a>
            </td>
            <td>
                <a href='{{ route('users.show', $partidaCampos) }}'>{{ $user->name }}</a>
            </td>
            <td>
                <a href='{{ route('partidas.show', $partidaCampos) }}'>{{ $partidaCampos->fecha_inicio }}</a>
            </td>

            <td>
                <a href='{{ route('nodos.show', $partidaCampos) }}'>Jugar</a>
            </td>

            <td>
                <form action='{{ route('partidas.destroy', $partidaCampos) }}' method='post'>
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
