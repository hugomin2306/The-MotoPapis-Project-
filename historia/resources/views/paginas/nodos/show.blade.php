<x-zz.base>

    <x-slot:tituloHead>Páginas</x-slot:tituloHead>
    <x-slot:titulo>Mostrar páginas</x-slot:titulo>

    <p>Nº Página: {{$nodo->id}}</p>
    <br>
    <p>Contenido: {{$nodo->descripcion_nodo}}</p>

    <br/>

    <a class="enlaces" href='{{ route('nodos.edit', $nodo) }}'>Editar</a>

    <br/><br/>

    <form id='{{ $nodo->id }}' action='{{ route('nodos.destroy', $nodo) }}'
          method='post'>
        @method('delete')

        <input class='botonEliminar' type='submit' name='crear' value='Eliminar página' />
    </form>

    <br>

       <button class="boton"><a href='{{ route('nodos.index') }}'>Ver páginas</a></button>

       <button class="boton"><a href='{{ route('links.create', ['id_nodo_origen_link' => $nodo->id]) }}'>Crear decision desde</a></button>

</x-zz.base>
