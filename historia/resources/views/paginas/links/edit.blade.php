<x-zz.base>
    <x-slot:tituloHead>Editar decisión</x-slot:tituloHead>
    <x-slot:titulo>Editar decision</x-slot:titulo>

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

        <label for='descripcion_link'>Descripción decisión: </label>
        <input id='descripcion_link' name='descripcion_link' type='text' value='{{ $link->descripcion_link }}'>
        <br />
        <br />

        <input class='boton' type='submit' name='editar' value='Editar decisión'>
        <br />
        <br />
    </form>

    <button class="boton"><a href='{{ route('links.index') }}'>Listado de decisiones</a></button>
</x-zz.base>
