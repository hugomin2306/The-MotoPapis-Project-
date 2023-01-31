<x-zz.base>

    <x-slot:tituloHead>Crear nodo</x-slot:tituloHead>
    <x-slot:titulo>Crear nodo</x-slot:titulo>

    <form action='{{ route('nodos.store') }}' method='post'>
        @method('post')
        @csrf

        <br><label for='descripcion_nodo'>Descripcion del Nodo</label>
        <input type='text' id='descripcion_nodo' name='descripcion_nodo' />

        <br>
        <br>
        <input class='boton' type='submit' name='crear' value='Crear nodo' />

    </form>

    <br>
    <br>
    <buttom class="boton"><a href='{{ route('nodos.index') }}'> Ir al listado</a></buttom>

</x-zz.base>
