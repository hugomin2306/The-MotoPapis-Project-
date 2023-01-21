<x-zz.base>
    <x-slot:tituloHead>Editar Links</x-slot:tituloHead>
    <x-slot:titulo>Editar link</x-slot:titulo>

    <form action='{{ route('links.update', $link) }}' method='post'>
        @method('put')
        @csrf

        <label for='id_nodo_origen'>ID Nodo Origen: </label>
        <input id='id_nodo_origen' name='id_nodo_origen' type='number' value='{{ $link->id_nodo_origen_link }}'>
        <br />

        <label for='id_nodo_destino'>ID Nodo Destino: </label>
        <input id='id_nodo_destino' name='id_nodo_destino' type='number' value='{{ $link->id_nodo_destino_link }}'>
        <br />
        <br />

        <label for='descripcion_link'>Descripción link: </label>
        <input id='descripcion_link' name='descripcion_link' type='text' value='{{ $link->descripcion_link }}'>
        <br />
        <br />

        <input class='boton' type='submit' name='editar' value='Editar Link'>
        <br />
        <br />
    </form>

    <button class="boton"><a href='{{ route('links.index') }}'>Listado de Links</a></button>
</x-zz.base>
