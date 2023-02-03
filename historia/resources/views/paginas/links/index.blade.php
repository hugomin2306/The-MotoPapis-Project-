<x-zz.base>

    <x-slot:tituloHead>Decisiones</x-slot:tituloHead>
    <x-slot:titulo>Listado de decisiones</x-slot:titulo>

    <table>
        <tr>
            <th>Decision</th>
            <th>Página origen</th>
            <th>Página destino</th>
            <th>Información</th>
            <th>Eliminar</th>
        </tr>


        @foreach ($link as $linkCampos)
            <tr>
                <td>
                    <a href='{{ route('links.show', $linkCampos) }}'>{{ $linkCampos->id }}</a>
                </td>
                <td>
                    <a href='{{ route('links.show', $linkCampos) }}'>{{ $linkCampos-> id_nodo_origen_link}}</a>
                </td>
                <td>
                    <a href='{{ route('links.show', $linkCampos) }}'>{{ $linkCampos->id_nodo_destino_link }}</a>
                </td>
                <td>
                    <a href='{{ route('links.show', $linkCampos) }}'>{{ $linkCampos->descripcion_link }}</a>
                </td>
                <td>
                    <form action='{{ route('links.destroy', $linkCampos) }}' method='post'>
                        @method('delete')
                        @csrf

                        <button class="botonEliminar" type='submit'>(X)</button>
                    </form>
                </td>
            </tr>
        @endforeach

    </table>

    <br><br>

    <button class="boton"><a href='{{ route('links.create') }}'>Crear decision</a></button><br><br>
    <button class="boton"><a href='{{ route('nodos.index') }}'>Ver páginas</a></button>

</x-zz.base>
