<x-zz.base>

    <x-slot:tituloHead>Nodos</x-slot:tituloHead>
    <x-slot:titulo>Listado de nodos</x-slot:titulo>

    <table>

    <tr>
        <th>Nodo</th>
        <th>Partida</th>
        <th>Descripción</th>
        <th>Eliminar</th>
    </tr>

    @foreach ($nodo as $nodoCampos)
        <tr>
            <td>
                <a href='{{ route('nodos.show', $nodoCampos) }}'>{{ $nodoCampos->id }}</a>
            </td>
            <td>
                <a href='{{ route('nodos.show', $nodoCampos) }}'>{{ $nodoCampos->partidas_id }}</a>
            </td>
            <td>
                <a href='{{ route('nodos.show', $nodoCampos) }}'>{{ $nodoCampos->descripcion_nodo }}</a>
            </td>
            <td>
                <form action='{{ route('nodos.destroy', $nodoCampos) }}' method='post'>
                    @method('delete')
                    @csrf

                    <button class="botonEliminar" type='submit'>(X)</button>
                </form>
            </td>
        </tr>
    @endforeach

    </table><br><br>

    <button class="boton"><a href='{{ route('nodos.create') }}'>Crear nodo</a></button><br><br>
    <button class="boton"><a href='{{ route('links.index') }}'>Gestionar listado de links</a></button>

</x-zz.base>
