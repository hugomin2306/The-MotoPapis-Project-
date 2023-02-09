<x-zz.base>
    <x-slot:tituloHead>Editar link</x-slot:tituloHead>
    <x-slot:titulo>Editar link</x-slot:titulo>

    <form action='{{ route('links.update', $link) }}' method='post'>
        @method('put')
        @csrf

        <label for='id_nodo_origen_link'>ID Nodo Origen: </label>
        <input id='id_nodo_origen_link' name='id_nodo_origen_link' type='number' value='{{ $link->id_nodo_origen_link }}'>
        <br />

        <label for='id_nodo_destino_link'>ID Nodo Destino: </label>
        <input id='id_nodo_destino_link' name='id_nodo_destino_link' type='number' value='{{ $link->id_nodo_destino_link }}'>
        <br />
        <br />

        <label for='descripcion_link'>Descripción link: </label><br>
        <textarea id="descripcion_link" name="descripcion_link" rows="4" cols="50">{{ $link->descripcion_link }}</textarea>
        <br />
        <br />

        <input class='boton' type='submit' name='editar' value='Editar link'>
        <br />
        <br />
    </form>

    <button class="boton"><a href='{{ route('links.index') }}'>Listado de links</a></button>
</x-zz.base>
