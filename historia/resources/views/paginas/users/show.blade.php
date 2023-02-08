<x-zz.base>

    <x-slot:tituloHead>Perfil Jugador</x-slot:tituloHead>
    <x-slot:titulo>Perfil</x-slot:titulo>

    <h2>Nombre: {{ $user->name }}</h2>
    <br />
    <h2>Email: {{ $user->email }}</h2>
    <br />

    <button class="boton"><a href="{{ route('partidas.index') }}">Volver al listado de partidas</a></button>
    <br />

    <button class="boton"><a href="{{ route('users.edit', $user) }}">Editar usuario</a></button>

</x-zz.base>

