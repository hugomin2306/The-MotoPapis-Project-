<x-zz.base>

    <x-slot:tituloHead>Crear link</x-slot:tituloHead>
    <x-slot:titulo>Crear link</x-slot:titulo>

    <form action='{{ route('links.store') }}' method='post'>
        @method('post')
        @csrf

        <label for='id_nodo_origen'>ID Nodo Origen: </label>
        <input id='id_nodo_origen' name='id_nodo_origen' type='number'>
        <br />

        <label for='id_nodo_destino'>ID Nodo Destino: </label>
        <input id='id_nodo_destino' name='id_nodo_destino' type='number'>
        <br />

        <label for='descripcion_link'>Descripción link: </label>
        <input id='descripcion_link' name='descripcion_link' type='text'>
        <br />
        <br />


        <input class='boton' type='submit' name='crear' value='Crear Link'>
        <br />
        <br />
    </form>

    <br>
    <buttom class="boton"><a href='{{ route('links.index') }}'> Ir al listado</a></buttom>

</x-zz.base>
