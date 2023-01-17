<?php

namespace App\Http\Controllers;

use App\Models\Nodos;
use Illuminate\Http\Request;

class NodosController extends Controller
{
    public function index()
    {
        $nodo = Nodos::orderBy('id')->get();
        return view('paginas/Nodos/index', compact('nodo'));
    }

    public function create()
    {
        return view('paginas/Nodos/create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'id_partida' => 'required',
            'descripcion_nodo' => 'required',
        ]);

        $nodo = new Nodos();
        $nodo->id_partida = $request->id_partida;
        $nodo->descripcion_nodo = $request->descripcion_nodo;
        $nodo->save();

        return redirect()->route('nodo.index');
    }

    public function show(Nodos $nodo)
    {
        return view('paginas/Nodos/show', compact('nodo'));
    }

    public function edit(Nodos $nodo)
    {
        return view('paginas/Nodos/edit', compact('nodo'));
    }

    public function update(Request $request, Nodos $nodo)
    {
        $this->validate($request, [
            'id_partida' => 'required',
            'descripcion_nodo' => 'required',
        ]);

        $nodo->id_partida = $request->id_partida;
        $nodo->descripcion_nodo = $request->descripcion_nodo;

        $nodo->save();

        return redirect()->route('nodo.index');
    }

    public function destroy(Nodos $nodo)
    {
        $nodo->delete();
        return redirect()->route('nodo.index');
    }
}
