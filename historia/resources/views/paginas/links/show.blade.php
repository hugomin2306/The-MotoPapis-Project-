<x-zz.base>

    <x-slot:tituloHead>Mostrar Links</x-slot:tituloHead>
    <x-slot:titulo>Mostrar detalle del Link</x-slot:titulo>

    <p>Pagina Origen: {{$link->id_nodo_origen_link}}</p>
    <p>Pagina Destino: {{$link->id_nodo_destino_link}}</p>
    <p>Informacion: {{$link->descripcion_link}}</p>

    <br />

    <button class="boton"><a href='{{ route('links.edit', $link) }}'>Editar</a></button>

    <br /><br />

    <form id='{{ $link->id }}' action='{{ route('links.destroy', $link) }}'
          method='post'>
        @method('delete')

        <input class='botonEliminar' type='submit' name='eliminar' value='Eliminar link' />
    </form>

    <br />

    <button class="boton"><a href='{{ route('links.index') }}'>Volver al listado</a></button>

</x-zz.base>
