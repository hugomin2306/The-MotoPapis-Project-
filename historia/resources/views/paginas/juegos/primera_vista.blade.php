<x-zz.base_inicio>

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
            <th><a href='{{ route('jugadores.login') }}'>Iniciar Sesion</a></th>
        </tr>
        <tr>
            <th><a href='{{ route('jugadores.create') }}'>Registrarse</a></th>
        </tr>
    </table>

</x-zz.base_inicio>
