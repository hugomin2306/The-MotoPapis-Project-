<x-zz.base>

    <x-slot:tituloHead>Historia Interactiva</x-slot:tituloHead>
    <x-slot:titulo>Iniciar Sesion</x-slot:titulo>

    <form action='{{ route('users.store') }}' method='post'>
        @method('post')
        @csrf

        <label for='nombre_jugador'>Nombre de ususario: </label>
        <input id='nombre_jugador' name='nombre_jugador' type='text'>
        <br />
        <br />

        <label for='clave_jugador'>Contraseña: </label>
        <input id='clave_jugador' name='clave_jugador' type='password'>
        <br />
        <br />

        <input class='boton' type='submit' name='iniciar' value='Iniciar Sesion'>
        <br />
        <br />
    </form>

</x-zz.base>
