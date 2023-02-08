<x-zz.base>

    <x-slot:tituloHead>Mostrar Decisión</x-slot:tituloHead>
    <x-slot:titulo>Mostrar Decisión</x-slot:titulo>

    <p>Pagina Origen: {{$link->id_nodo_origen_link}}</p>
    <p>Pagina Destino: {{$link->id_nodo_destino_link}}</p>
    <p>Información: {{$link->descripcion_link}}</p>

    <br />

    <a class="enlaces" href='{{ route('links.edit', $link) }}'>Editar</a>

    <br /><br />

    <form id='{{ $link->id }}' action='{{ route('links.destroy', $link) }}'
          method='post'>
        @method('delete')

        <input class='botonEliminar' type='submit' name='eliminar' value='Eliminar decisión' />
    </form>

    <br />

    <button class="boton"><a href='{{ route('links.index') }}'>Volver al listado</a></button>

</x-zz.base>
