<x-zz.base>

    <x-slot:tituloHead>Crear link</x-slot:tituloHead>
    <x-slot:titulo>Crear link</x-slot:titulo>

    <form action='{{ route('links.store') }}' method='post'>
        @method('post')
        @csrf

        <label for='id_nodo_origen_link'>Página origen: </label>
        <input type='text' id='id_nodo_origen_link' name='id_nodo_origen_link'>
        <br />

        <label for='id_nodo_destino_link'>Página Destino: </label>
        <input type='text' id='id_nodo_destino_link' name='id_nodo_destino_link'>
        <br />

        <label for='descripcion_link'>Informacion: </label>
        <input type='text' id='descripcion_link' name='descripcion_link'>
        <br />
        <br />


        <input class='boton' type='submit' name='crear' value='Crear Link'>
        <br />
        <br />
    </form>

    <br>
    <button class="boton"><a href='{{ route('links.index') }}'> Ir al listado</a></button>

</x-zz.base>
