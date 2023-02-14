<x-zz.base_inicio>

    <x-slot:tituloHead>Editar perfil</x-slot:tituloHead>
    <x-slot:titulo>Editar perfil</x-slot:titulo>

    <form action='{{ route('users.update', $user) }}' method='post'>
        @method('put')
        @csrf

        <label for='name'>Nombre</label>
        <input id='name' name='name' type='text' value='{{ $user->name }}'>
        <br />

        <label for='email'>Email</label><br>
        <textarea id="email" name="email" rows="4" cols="50">{{ $user->email }}</textarea>
        <br />

        <label for='password'>Contraseña</label>
        <input id='password' name='password' type='password' value='{{ $user->password }}'>
        <br />
        <input class='boton' type='submit' name='editar' value='Editar perfil'>
        <br />
        <br />
    </form>

    <button class="boton"><a class="enlaces" href='{{ route('partidas.index') }}'>Listado de partidas</a></button>

</x-zz.base_inicio>
