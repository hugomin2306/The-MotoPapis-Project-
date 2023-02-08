<x-zz.base>

    <x-slot:titulo>Crear Partidas</x-slot:titulo>

    <form action='{{ route('partidas.store') }}' method='post'>
        @method('post')
        @csrf

        <br>
        <label for='id_jugador'>ID del Jugador</label>
        <input type='number' id='id_jugador' name='id_jugador' />

        <br>
        <label for='fecha_inicio'>Fecha de inicio</label>
        <input type='date' id='fecha_incio' name='fecha_inicio' />

        <br>
        <br>
        <input class='boton' type='submit' name='crear' value='Crear Partida' />

    </form>

    <br>
    <br>
    <buttom class="boton"><a href='{{ route('partidas.index') }}'> Ir al listado</a></buttom>

</x-zz.base>
