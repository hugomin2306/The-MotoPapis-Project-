<x-zz.base>

    <x-slot:tituloHead>Páginas</x-slot:tituloHead>
    <x-slot:titulo>{{$nodo->titulo_nodo}}</x-slot:titulo>

    <p>{{$nodo->descripcion_nodo}}</p>

    @foreach($linkOrigen as $link)
        <a href=' {{ route('nodos.show', $link->id_nodo_destino_link) }}'><br>{{ $link->descripcion_link }}</a>
    @endforeach

</x-zz.base>
