
<x-zz.base>

    <x-slot:titulo>Crear nodo</x-slot:titulo>

    <form action='{{ route('nodos.store') }}' method='post'>
        @method('post');

        <label for='ID_NODO'>ID del Nodo</label>
        <input type='number' id='ID_NODO' name='ID_NODO' />

        <br><label for='ID_CAMINO'>Apellidos</label>
        <input type='number' id='ID_CAMINO' name='ID_CAMINO' />

        <br><label for='ID_PARTIDA'>Telefono</label>
        <input type='number' id='ID_PARTIDA' name='ID_PARTIDA' />
    </form>

<a href=''{{ route('nodos.index') }}'> Ir al listado</a>

</x-zz.base>
