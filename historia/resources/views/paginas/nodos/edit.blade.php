<x-zz.base>

    <x-slot:tituloHead>Editar nodo</x-slot:tituloHead>
    <x-slot:titulo>Editar nodo</x-slot:titulo>

    <form action='{{ route('nodos.update', $nodo) }}' method='post'>
        @method('put')
        @csrf

        <label for='titulo_nodo'>Titulo del Nodo: </label>
        <input id='titulo_nodo' name='titulo_nodo' type='text' value='{{ $nodo->titulo_nodo }}'>
        <br />

        <label for='descripcion_nodo'>Descripcion</label><br>
        <textarea id="descripcion_nodo" name="descripcion_nodo" rows="4" cols="50">{{ $nodo->descripcion_nodo }}</textarea>

        <br />
        <br />
        <input class='boton' type='submit' name='editar' value='Editar página'>
        <br />
        <br />
    </form>

    <br />
    <br />

    <div id="zonaLinksNodos">
        <div>
            <h2>Links cuyo destino es el nodo {{ $nodo->titulo_nodo }}</h2>

            @foreach($linksDestino as $link)
                <div id="cajaLink">
                    <form action='{{ route('links.update', $link->id) }}' method='post'>
                        @method('put')
                        @csrf

                        <label for='id_nodo_origen_link'>ID Nodo Origen: </label>
                        <input id='id_nodo_origen_link' name='id_nodo_origen_link' type='number' value='{{ $link->id_nodo_origen_link }}'>
                        <br />

                        <label for='id_nodo_destino_link'>ID Nodo Destino: </label>
                        <input id='id_nodo_destino_link' name='id_nodo_destino_link' type='number' value='{{ $link->id_nodo_destino_link }}'>
                        <br />
                        <br />

                        <label for='descripcion_link'>Descripción link: </label><br>
                        <textarea id="descripcion_link" name="descripcion_link" rows="4" cols="50">{{ $link->descripcion_link }}</textarea>
                        <br />
                        <br />

                        <input class='boton' type='submit' name='editar' value='Editar link'>
                        <br />
                        <br />
                    </form>
                </div>
            @endforeach


        </div>

        <div>
            <h2>Links cuyo origen es el nodo {{ $nodo->titulo_nodo }}</h2>

            @foreach($linksOrigen as $link)
                <div id="cajaLink">
                    <form action='{{ route('links.update', $link->id) }}' method='post'>
                        @method('put')
                        @csrf

                        <label for='id_nodo_origen_link'>ID Nodo Origen: </label>
                        <input id='id_nodo_origen_link' name='id_nodo_origen_link' type='number' value='{{ $link->id_nodo_origen_link }}'>
                        <br />

                        <label for='id_nodo_destino_link'>ID Nodo Destino: </label>
                        <input id='id_nodo_destino_link' name='id_nodo_destino_link' type='number' value='{{ $link->id_nodo_destino_link }}'>
                        <br />
                        <br />

                        <label for='descripcion_link'>Descripción link: </label><br>
                        <textarea id="descripcion_link" name="descripcion_link" rows="4" cols="50">{{ $link->descripcion_link }}</textarea>
                        <br />
                        <br />

                        <input class='boton' type='submit' name='editar' value='Editar link'>
                        <br />
                        <br />
                    </form>
                </div>
            @endforeach
        </div>



    </div>

    <div>
        <h2>Crear nuevo link</h2>
        <form action='{{ route('links.store', $nodo) }}' method='post'>
            @method('post')
            @csrf

            <label for='id_nodo_origen_link'>Nodo origen: </label>
            <input type="number"  name="id_nodo_origen_link" value="{{ request('id_nodo_origen_link') }}">

            <br />

            <label for='id_nodo_destino_link'>Nodo Destino: </label>
            <input type='number' id='id_nodo_destino_link' name='id_nodo_destino_link'>
            <br />

            <label for='descripcion_link'>Informacion: </label><br>
            <textarea id="descripcion_link" name="descripcion_link" rows="4" cols="50"></textarea>

            <br />
            <br />


            <input class='boton' type='submit' name='crear' value='Crear links'>
            <br />
            <br />
        </form>
    </div>

        <button class="boton"><a href='{{ route('nodos.index') }}'>Listado de páginas</a></button>

</x-zz.base>
