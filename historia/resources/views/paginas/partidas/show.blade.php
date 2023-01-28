<x-zz.base>

    <x-slot:tituloHead>Mostrar Partida</x-slot:tituloHead>
    <x-slot:titulo>Mostrar los detalles de la Partida</x-slot:titulo>

    <p>Jugador: {{ $partida->id_jugador }}</p>
    <br />
    <p>Fecha de inicio: {{ $partida->fecha_inicio }}</p>
    <br />
    <p>Fecha final: {{ $partida->fecha_fin }}</p>
    <br />

    <a href="{{ route('partidas.edit'), $partida }}">Editar partida</a>

    <form action="{{ route('partidas.destroy'), $partida }}" method="post">
        @method('delete')

        <input type="submit" class="button" name="eliminar_partida" value="Eliminar partida">
    </form>

    <br />

    <buttom class="boton"><a href="{{ route('partidas.index') }}">Volver al listado de partidas</a></buttom>

</x-zz.base>
