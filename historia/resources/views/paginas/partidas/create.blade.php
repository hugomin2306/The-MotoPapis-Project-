
<x-zz.base>

    <x-slot:titulo>Crear Partidas</x-slot:titulo>

    <form action='{{ route('partidas.store') }}' method='post'>
        @method('post')
        @csrf

        <br><label for='partidas_id'>ID Partida</label>
        <input type='number' id='partidas_id' name='partidas_id' />

        <br><label for='descripcion_nodo'>Descripcion del Nodo</label>
        <input type='text' id='descripcion_nodo' name='descripcion_nodo' />

        <br>
        <br>
        <input class='button' type='submit' name='crear' value='Crear Paartidas' />

    </form>

    <br>
<a href='{{ route('partidas.index') }}'> Ir al listado</a>

</x-zz.base>
