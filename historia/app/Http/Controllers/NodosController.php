<?php

namespace App\Http\Controllers;

use App\Models\Links;
use App\Models\Partidas;
use App\Models\Nodos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NodosController extends Controller
{
    public function index(Partidas $partidas)
    {
        $nodo = Nodos::orderBy('id')->get();
        return view('paginas/nodos/index', compact('nodo'));
    }

    public function create()
    {
        return view('paginas/nodos/create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'partidas_id' => 'required',
            'titulo_nodo' => 'required',
            'descripcion_nodo' => 'required',
        ]);

        $nodo = new Nodos();
        $nodo->partidas_id = $request->partidas_id;
        $nodo->titulo_nodo = $request->titulo_nodo;
        $nodo->descripcion_nodo = $request->descripcion_nodo;
        $nodo->save();

        return redirect()->route('nodos.index');
    }

    public function show(Nodos $nodo, Partidas $partidas, Request $request)
    {
        $nodos = DB::table('nodos')
            ->select('*')
            ->where('partidas_id', 1)
            ->get();

        $linkOrigen = DB::table('links')
            ->select('*')
            ->where('id_nodo_origen_link', $nodo->id)
            ->get();

        return view('paginas/nodos/show', compact('nodo', 'linkOrigen', 'partidas'));
    }

    public function edit(Nodos $nodo)
    {
        $linksDestino = DB::table('links')
            ->select('*')
            ->where('id_nodo_destino_link', $nodo->id)
            ->get();

        $linksOrigen = DB::table('links')
            ->select('*')
            ->where('id_nodo_origen_link', $nodo->id)
            ->get();

        return view('paginas/nodos/edit', compact('nodo'))->with('linksDestino', $linksDestino)->with('linksOrigen', $linksOrigen);
    }

    public function update(Request $request, Nodos $nodo)
    {
        $this->validate($request, [
            'partidas_id' => 'required',
            'titulo_nodo' => 'required',
            'descripcion_nodo' => 'required',
        ]);

        $nodo->partidas_id = $request->partidas_id;
        $nodo->titulo_nodo = $request->titulo_nodo;
        $nodo->descripcion_nodo = $request->descripcion_nodo;
        $nodo->save();

        return redirect()->route('nodos.index');
    }

    public function destroy(Nodos $nodo)
    {
        $nodo->links()->delete();
        $nodo->delete();
        return redirect()->route('nodos.index');
    }
}
