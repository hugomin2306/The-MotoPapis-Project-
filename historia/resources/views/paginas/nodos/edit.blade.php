<x-zz.base>

    <x-slot:tituloHead>Editar nodo</x-slot:tituloHead>
    <x-slot:titulo>Editar nodo</x-slot:titulo>

    <form action='{{ route('nodos.update', $nodo) }}' method='post'>
        @method('put')
        @csrf

        <label for='partidas_id'>ID Partida</label>
        <input id='partidas_id' name='partidas_id' type='text' value='{{ $nodo->partidas_id }}'>
        <br />

        <label for='descripcion_nodo'>Descripcion</label>
        <input id='descripcion_nodo' name='descripcion_nodo' type='text' value='{{ $nodo->descripcion_nodo }}'>
        <br />
        <br />
        <input class='button' type='submit' name='crear' value='Editar Nodo'>
        <br />
        <br />
    </form>

      <buttom class="boton"><a class="enlaces" href='{{ route('nodos.index') }}'>Listado de Nodos</a></buttom>
</x-zz.base>
