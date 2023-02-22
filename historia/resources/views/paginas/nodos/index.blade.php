<x-zz.base>

    <x-slot:tituloHead>Nodos</x-slot:tituloHead>
    <x-slot:titulo>Listado de nodos</x-slot:titulo>

    <table>

    <tr>
        <th>Nodo</th>
        <th>Descripcion</th>
        <th>Eliminar</th>
    </tr>

        @foreach ($nodo as $nodoCampos)
        <tr>
            <td>
                <a href='{{ route('nodos.edit', $nodoCampos) }}'>{{ $nodoCampos->titulo_nodo }}</a>
            </td>
            <td>
                <a href='{{ route('nodos.edit', $nodoCampos) }}'>{{ $nodoCampos->descripcion_nodo }}</a>
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

</x-zz.base>
