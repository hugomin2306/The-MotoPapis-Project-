<x-zz.base>

    <x-slot:tituloHead>Mostrar Nodos</x-slot:tituloHead>
    <x-slot:titulo>Mostrar los detalles de los Nodos</x-slot:titulo>

    <p>ID: {{$nodo->id}}</p>
    <p>ID_Partida: {{$nodo->partidas_id}}</p>
    <p>Descripcion: {{$nodo->descripcion_nodo}}</p>

    <br/>

    <a href='{{ route('nodos.edit', $nodo) }}'>Editar</a>

    <br/><br/>

    <form id='{{ $nodo->id }}' action='{{ route('nodos.destroy', $nodo) }}'
          method='post'>
        @method('delete')

        <input class='botonEliminar' type='submit' name='crear' value='Eliminar nodo' />
    </form>

    <br>

        <a href='{{ route('nodos.index') }}'>Volver al listado de nodos</a>

</x-zz.base>
