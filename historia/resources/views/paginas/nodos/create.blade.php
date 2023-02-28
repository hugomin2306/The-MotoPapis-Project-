<x-zz.base>

    <x-slot:tituloHead>Crear nodo</x-slot:tituloHead>
    <x-slot:titulo>Crear nodo</x-slot:titulo>

    <form action='{{ route('nodos.store') }}' method='post'>
        @method('post')
        @csrf

        <br><label for='partidas_id'>Partida</label>
        <input type="text" name="id_partida" value="{{ $id_partida }}">

        <br><label for='titulo_nodo'>Titulo</label>
        <input type='text' id='titulo_nodo' name='titulo_nodo'>

        <br><label for='descripcion_nodo'>Descripcion de la nodo</label><br>
        <textarea id="descripcion_nodo" name="descripcion_nodo" rows="4" cols="50"></textarea>

        <br>
        <br>
        <input class='boton' type='submit' name='crear' value='Crear nodo' />

    </form>

    <br>
    <br>
    <button class="boton"><a href='{{ route('nodos.index') }}'> Ir al listado de nodos</a></button>

</x-zz.base>
