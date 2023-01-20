<x-zz.base>

    <x-slot:titulo>Crear Partidas</x-slot:titulo>

    <form action='{{ route('partidas.store') }}' method='post'>
        @method('post')
        @csrf

        <br><label for='id_jugador'>ID del Jugador</label>
        <input type='number' id='id_jugador' name='id_jugador' />

        <br><label for='fecha_inicio'>Fecha de inicio</label>
        <input type='text' id='fecha_incio' name='fecha_inicio' />

        <br><label for='fecha_fin'>Fecha de final</label>
        <input type='text' id='fecha_fin' name='fecha_fin' />

        <br><label for='minutos_jugados'>Minutos jugados</label>
        <input type='text' id='minutos_jugados' name='minutos_jugados' />

        <br>
        <br>
        <input class='button' type='submit' name='crear' value='Crear Partida' />

    </form>

    <br>
<a href='{{ route('partidas.index') }}'> Ir al listado</a>

</x-zz.base>
