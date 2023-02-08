<x-zz.base>

    <x-slot:tituloHead>Mostrar Partida</x-slot:tituloHead>
    <x-slot:titulo>Mostrar los detalles de la Partida</x-slot:titulo>

    <p>Jugador: {{ $partidas->id_jugador }}</p>
    <br />
    <p>Fecha de inicio: {{ $partidas->fecha_inicio }}</p>
    <br />
    <p>Fecha final: {{ $partidas->fecha_fin }}</p>
    <br />

    <form action="{{ route('partidas.destroy'), $partidas }}" method="post">
        @method('delete')

        <input type="submit" class="button" name="eliminar_partida" value="Eliminar partida">
    </form>

    <br />

    <button class="boton"><a href="{{ route('partidas.index') }}">Volver al listado de partidas</a></button>

</x-zz.base>
