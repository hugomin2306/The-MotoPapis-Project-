
<x-zz.base>

    <x-slot:titulo>Crear nodo</x-slot:titulo>

    <form action='{{ route('Nodos.store') }}' method='post'>
        @method('post');

        <label for='id_nodo'>ID del Nodo</label>
        <input type='number' id='id_nodo' name='id_nodo' />

        <br><label for='id_partida'>ID Partida</label>
        <input type='number' id='id_partida' name='id_partida' />

        <label for='descripcion_nodo'>Descripcion del Nodo</label>
        <input type='text' id='descripcion_nodo' name='descripcion_nodo' />

        <input class='button' type='submit' name='crear' value='Crear nodo' />
    </form>

<a href=''{{ route('Nodos.index') }}'> Ir al listado</a>

</x-zz.base>
