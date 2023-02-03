<x-zz.base>

    <x-slot:tituloHead>Crear decisión</x-slot:tituloHead>
    <x-slot:titulo>Crear decisión</x-slot:titulo>

    <form action='{{ route('links.store', $nodo) }}' method='post'>
        @method('post')
        @csrf

        <label for='id_nodo_origen_link'>Página origen: </label>
        <input type="number"  name="id_nodo_origen_link" value="{{ request('id_nodo_origen_link') }}">

        <br />

        <label for='id_nodo_destino_link'>Página Destino: </label>
        <input type='number' id='id_nodo_destino_link' name='id_nodo_destino_link'>
        <br />

        <label for='descripcion_link'>Informacion: </label><br>
        <textarea id="descripcion_link" name="descripcion_link" rows="4" cols="50"></textarea>

        <br />
        <br />


        <input class='boton' type='submit' name='crear' value='Crear decision'>
        <br />
        <br />
    </form>

    <br>
    <button class="boton"><a href='{{ route('links.index') }}'> Ir al listado de decisiones</a></button>

</x-zz.base>
