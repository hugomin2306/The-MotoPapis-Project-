<x-zz.base>

    <x-slot:tituloHead>Editar nodo</x-slot:tituloHead>
    <x-slot:titulo></x-slot:titulo>

        <div id="zonaLinksNodos">
            <div>

            <h2>Links cuyo destino es el nodo {{ $nodo->titulo_nodo }}</h2>

            @foreach($linksDestino as $link)

                <div id="cajaLink">
                    <form action='{{ route('links.update', $link->id) }}' method='post'>
                        @method('put')
                        @csrf

                            <label for='id_nodo_origen_link'>Nodo Origen: </label>
                            <select name="id_nodo_origen_link">
                                @foreach($nodosPartida as $nodoPartida)

                                    @if($nodoPartida->id === $link->id_nodo_origen_link)
                                        <option value="{{ $nodoPartida->id }}" selected>{{ $nodoPartida->titulo_nodo }}</option>
                                    @else
                                        <option value="{{ $nodoPartida->id }}">{{ $nodoPartida->titulo_nodo }}</option>
                                    @endif

                                @endforeach

                            </select>

                        <br />


                            <label for='id_nodo_destino_link'>Nodo Destino: </label>
                            <select name="id_nodo_destino_link">
                                @foreach($nodosPartida as $nodoPartida)

                                @if($nodoPartida->id === $nodo->id and $nodoPartida->id === $link->id_nodo_destino_link and $nodo->id === $link->id_nodo_destino_link)
                                    <option value="{{ $nodoPartida->id }}" selected>{{ $nodoPartida->titulo_nodo }}</option>
                                @else
                                    <option value="{{ $nodoPartida->id }}">{{ $nodoPartida->titulo_nodo }}</option>
                                @endif

                            @endforeach

                            </select>

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

        <div>

        <h2>Crear nuevo link destino {{ $nodo->titulo_nodo  }} </h2>
            <form action='{{ route('links.store', $nodo) }}' method='post'>
            @method('post')
            @csrf

            <label for='id_nodo_origen_link'>Nodo Origen: </label>
            <select name="id_nodo_origen_link" >
                <option disabled selected>Elige</option>
                @foreach($nodosPartida as $nodoPartida)

                    <option value="{{ $nodoPartida->id }}">{{ $nodoPartida->titulo_nodo }}</option>

                @endforeach

            </select>

            <br />

            <label for='id_nodo_destino_link'>Nodo Destino: </label>
            <select name="id_nodo_destino_link">
                <option selected disabled>{{ $nodo->titulo_nodo }}</option>
                @foreach($nodosPartida as $nodoPartida)

                    <option value="{{ $nodoPartida->id }}">{{ $nodoPartida->titulo_nodo }}</option>

                @endforeach

            </select>

            <br />
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
<h2>Editar nodo</h2>
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
        </div>

        </div>
            <h2>Links cuyo origen es el nodo {{ $nodo->titulo_nodo }}</h2>

            @foreach($linksOrigen as $link)
                <div id="cajaLink">
                    <form action='{{ route('links.update', $link->id) }}' method='post'>
                        @method('put')
                        @csrf

                        <label for='id_nodo_origen_link'>Nodo Origen: </label>
                        <select name="id_nodo_origen_link">
                            @foreach($nodosPartida as $nodoPartida)

                                @if($nodoPartida === $nodo->id and $nodoPartida->id === $link->id_nodo_origen_link and $nodo->id === $link->id_nodo_origen_link)

                                    <option value="{{ $nodoPartida->id }}" selected>{{ $nodoPartida->titulo_nodo }}</option>

                                @else

                                    <option value="{{ $nodoPartida->id }}">{{ $nodoPartida->titulo_nodo }}</option>

                                @endif


                            @endforeach

                        </select>

                        <br />

                        <label for='id_nodo_destino_link'>Nodo Destino: </label>
                        <select name="id_nodo_destino_link">
                            @foreach($nodosPartida as $nodoPartida)

                                @if($nodoPartida->id === $link->id_nodo_destino_link)

                                    <option value="{{ $nodoPartida->id }}" selected>{{ $nodoPartida->titulo_nodo }}</option>

                                @else

                                    <option value="{{ $nodoPartida->id }}">{{ $nodoPartida->titulo_nodo }}</option>

                                @endif

                            @endforeach

                            <br />

                        </select>

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

                <br />
        </div>

        <br />
            @endforeach
        <br />



        <h2>Crear nuevo link origen {{ $nodo->titulo_nodo }}</h2>
        <form action='{{ route('links.store', $nodo) }}' method='post'>
            @method('post')
            @csrf

            <label for='id_nodo_origen_link'>Nodo Origen: </label>
            <select name="id_nodo_origen_link">
                <option disabled selected>{{ $nodo->titulo_nodo }}</option>
                @foreach($nodosPartida as $nodoPartida)

                    <option value="{{ $nodoPartida->id }}">{{ $nodoPartida->titulo_nodo }}</option>

                @endforeach

            </select>

            <br />

            <label for='id_nodo_destino_link'>Nodo Destino: </label>
            <select name="id_nodo_destino_link">
                <option disabled selected>Elige</option>
                @foreach($nodosPartida as $nodoPartida)

                    <option value="{{ $nodoPartida->id }}">{{ $nodoPartida->titulo_nodo }}</option>

                @endforeach

            </select>

            <br />
            <br />
            <label for='descripcion_link'>Informacion: </label><br>
            <textarea id="descripcion_link" name="descripcion_link" rows="4" cols="50"></textarea>

            <br />
            <br />


            <input class='boton' type='submit' name='crear' value='Crear links'>
            <br />
            <br />
        </form>

        <button class="boton"><a href='{{ route('nodos.index') }}'>Listado de páginas</a></button>

</x-zz.base>
