<x-zz.base>

    <x-slot:tituloHead>Bienvenid@s!!!!</x-slot:tituloHead>
    <x-slot:titulo>Historia Interactiva</x-slot:titulo>
    <style>
        h1{
            text-align: center;
        }
        table{
            display: flex;
            justify-content: center;
            text-align: center;
        }
    </style>

    <table>
        <tr>
            <th><a href='{{ route('jugadores.create') }}'>Iniciar Sesion</a></th>
        </tr>
        <tr>
            <th><a href='{{ route('jugadores.create') }}'>Registrarse</a></th>
        </tr>
    </table>

</x-zz.base>