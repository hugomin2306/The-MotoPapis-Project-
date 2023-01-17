<x-zz.base>
    <x-slot:titulo>Editar nodo</x-slot:titulo>

    <form action='{{ route('Nodos.update', $nodo) }}' method='post'>
        @method('put')

        <label for='id_nodo'>ID Nodo</label>
        <input id='id_nodo' name='id_nodo' type='text' value='{{ $nodo->id_nodo }}'>
        <br />

        <label for='id_partida'>ID Partida</label>
        <input id='id_partida' name='id_partida' type='text' value='{{ $nodo->id_partida }}'>
        <br />

        <label for='descripcion'>Descripcion</label>
        <input id='descripcion' name='descripcion' type='text' value='{{ $nodo->descripcion_nodo }}'>
        <br />

        <button type='submit'>Actualizar</button>
    </form>
</x-zz.base>
