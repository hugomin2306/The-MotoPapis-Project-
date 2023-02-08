<x-zz.base>

    <x-slot:tituloHead>Crear links</x-slot:tituloHead>
    <x-slot:titulo>Crear link</x-slot:titulo>

    <form action='{{ route('links.store', $nodo) }}' method='post'>
        @method('post')
        @csrf

        <label for='id_nodo_origen_link'>Nodo origen: </label>
        <input type="number"  name="id_nodo_origen_link" value="{{ request('id_nodo_origen_link') }}">

        <br />

        <label for='id_nodo_destino_link'>Nodo Destino: </label>
        <input type='number' id='id_nodo_destino_link' name='id_nodo_destino_link'>
        <br />

        <label for='descripcion_link'>Informacion: </label><br>
        <textarea id="descripcion_link" name="descripcion_link" rows="4" cols="50"></textarea>

        <br />
        <br />


        <input class='boton' type='submit' name='crear' value='Crear links'>
        <br />
        <br />
    </form>

    <br>
    <button class="boton"><a href='{{ route('links.index') }}'> Ir al listado de links</a></button>

</x-zz.base>
