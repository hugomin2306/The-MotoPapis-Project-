<x-zz.base>

    <x-slot:tituloHead>Nodos</x-slot:tituloHead>
    <x-slot:titulo>Listado de nodos</x-slot:titulo>

    <table>

    <tr>
        <th>Nodos</th>
        <th>Partida</th>
        <th>Descripcion</th>
        <th>Eliminar</th>
    </tr>

    @foreach ($nodo as $nodoCampos)
        <tr>
            <td>
                <a href='{{ route('nodo.show', $nodoCampos) }}'>{{ $nodoCampos->id }}</a>
            </td>
            <td>
                <a href='{{ route('nodo.show', $nodoCampos) }}'>{{ $nodoCampos->id_partida }}</a>
            </td>
            <td>
                <a href='{{ route('nodo.show', $nodoCampos) }}'>{{ $nodoCampos->descripcion_nodo }}</a>
            </td>
            <td>
                <form action='{{ route('nodo.destroy', $nodoCampos) }}' method='post'>
                    @method('delete')
                    @csrf

                    <button type='submit'>(X)</button>
                </form>
            </td>
        </tr>
    @endforeach

    </table><br><br>

    <button><a href='{{ route('nodo.create') }}'>Crear</a></button><br><br>

    <a href='{{ route('nodo.index') }}'>Listado de Nodos</a>

</x-zz.base>
