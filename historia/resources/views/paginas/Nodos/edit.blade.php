<x-zz.base>
    <x-slot:titulo>Editar nodo</x-slot:titulo>

    <form action='{{ route('nodo.update', $nodo) }}' method='post'>
        @method('put')

        <label for='id'>ID Nodo</label>
        <input id='id' name='id' type='text' value='{{ $nodo->id }}'>
        <br />

        <label for='id_partida'>ID Partida</label>
        <input id='id_partida' name='id_partida' type='text' value='{{ $nodo->id_partida }}'>
        <br />

        <label for='descripcion'>Descripcion</label>
        <input id='descripcion' name='descripcion' type='text' value='{{ $nodo->descripcion_nodo }}'>
        <br />
        <br />
        <button type='submit'>Actualizar</button>
        <br />
        <br />
    </form>

      <a href='{{ route('nodo.index') }}'>Listado de Nodos</a>
</x-zz.base>
