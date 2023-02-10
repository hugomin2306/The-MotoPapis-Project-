<x-zz.base_welcome>

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
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <th><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></th>

                        @if (Route::has('register'))
                            <th><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></th>
                        @endif
                    @endauth
                </div>
                @endif</th>
        </tr>
    </table>

</x-zz.base_welcome>
