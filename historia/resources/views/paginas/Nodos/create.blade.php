
<x-zz.base>

    <x-slot:titulo>Crear nodo</x-slot:titulo>

    <form action='{{ route('nodo.store') }}' method='post'>
        @method('post')

        <br><label for='id'>ID Nodo</label>
        <input type='number' id='id' name='id' />

        <br><label for='id_partida'>ID Partida</label>
        <input type='number' id='id_partida' name='id_partida' />

        <br><label for='descripcion_nodo'>Descripcion del Nodo</label>
        <input type='text' id='descripcion_nodo' name='descripcion_nodo' />

        <br>
        <input class='button' type='submit' name='crear' value='Crear nodo' />

    </form>

<a href='{{ route('nodo.index') }}'> Ir al listado</a>

</x-zz.base>
