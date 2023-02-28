<x-zz.base>

    <x-slot:tituloHead>Mostrar Partida</x-slot:tituloHead>
    <x-slot:titulo>Mostrar los detalles de la Partida</x-slot:titulo>

    <table>

        <tr>
            <th>Titulo</th>
            <th>Eliminar</th>
        </tr>
    @foreach ($nodo as $nodoCampos)
        <tr>
            <td>
                <a href='{{ route('nodos.edit', $nodoCampos) }}'>{{ $nodoCampos->titulo_nodo }}</a>
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
    <br />

    </table>

    <button class="boton"><a href='{{ route('nodos.create') }}'>Crear página</a></button><br><br>


</x-zz.base>
