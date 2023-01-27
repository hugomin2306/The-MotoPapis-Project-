<x-zz.base_inicio>

    <x-slot:tituloHead>Historia Interactiva</x-slot:tituloHead>
    <x-slot:titulo>Iniciar Sesiones</x-slot:titulo>

    <form action='{{ route('jugadores.store') }}' method='post'>
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

        <input class='boton' type='submit' name='crear' value='Iniciar Sesion'>
        <br />
        <br />
    </form>

</x-zz.base_inicio>

