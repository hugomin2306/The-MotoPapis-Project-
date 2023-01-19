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

                    <button type='submit'>(X)</button>
                </form>
            </td>
        </tr>
    @endforeach

    </table><br><br>

    <button><a href='{{ route('nodos.create') }}'>Crear</a></button><br><br>

    <a href='{{ route('partidas.index') }}'>Listado de Partidas</a>


</x-zz.base>
