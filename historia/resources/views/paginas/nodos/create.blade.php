<x-zz.base>

    <x-slot:tituloHead>Crear página</x-slot:tituloHead>
    <x-slot:titulo>Crear página</x-slot:titulo>

    <form action='{{ route('nodos.store') }}' method='post'>
        @method('post')
        @csrf

        <br><label for='partidas_id'>Partida</label>
        <input type='text' id='partidas_id' name='partidas_id'>

        <br><label for='descripcion_nodo'>Descripcion de la página</label>
        <input type='text' id='descripcion_nodo' name='descripcion_nodo' />

        <br>
        <br>
        <input class='boton' type='submit' name='crear' value='Crear página' />

    </form>

    <br>
    <br>
    <button class="boton"><a href='{{ route('nodos.index') }}'> Ir al listado de páginas</a></button>

</x-zz.base>
