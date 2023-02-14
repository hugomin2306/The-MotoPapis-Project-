<x-zz.base>

    <x-slot:tituloHead>Páginas</x-slot:tituloHead>
    <x-slot:titulo>Listado de páginas</x-slot:titulo>

    <table>

    <tr>
        <th>Nodo</th>
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

    <button class="boton"><a href='{{ route('nodos.create') }}'>Crear página</a></button><br><br>
    <button class="boton"><a href='{{ route('links.index') }}'>Ver decisiones</a></button>

</x-zz.base>
