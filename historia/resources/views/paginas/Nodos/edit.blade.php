<x-zz.base>
    <x-slot:titulo>Editar nodo</x-slot:titulo>

    <form action='{{ route('nodo.update', $nodo) }}' method='post'>
        @method('put')
        @csrf

        <label for='id_partida'>ID Partida</label>
        <input id='id_partida' name='id_partida' type='text' value='{{ $nodo->id_partida }}'>
        <br />

        <label for='descripcion_nodo'>Descripcion</label>
        <input id='descripcion_nodo' name='descripcion_nodo' type='text' value='{{ $nodo->descripcion_nodo }}'>
        <br />
        <br />
        <input class='button' type='submit' name='crear' value='Editar Nodo'>
        <br />
        <br />
    </form>

      <a href='{{ route('nodo.index') }}'>Listado de Nodos</a>
</x-zz.base>
