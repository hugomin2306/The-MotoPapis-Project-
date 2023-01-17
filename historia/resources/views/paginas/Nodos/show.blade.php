<x-zz.base>

    <x-slot:tituloHead>Mostrar Nodos</x-slot:tituloHead>
    <x-slot:titulo>Mostrar los detalles de los Nodos</x-slot:titulo>

    <p>ID: {{$nodo->id}}</p>
    <p>ID_Partida: {{$nodo->id_partida}}</p>
    <p>Descripcion: {{$nodo->descripcion_nodo}}</p>


    <a href='{{ route('nodo.edit', $nodo) }}'>Editarla</a>

    <br/><br/>

    <a href='{{ route('nodo.index') }}'>Volver al listado</a>

</x-zz.base>
