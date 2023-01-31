<?php

namespace App\Http\Controllers;

use App\Models\Nodos;
use Illuminate\Http\Request;

class NodosController extends Controller
{
    public function index()
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
            'descripcion_nodo' => 'required',
        ]);

        $nodo = new Nodos();
        $nodo->partidas_id = $request->partidas_id;
        $nodo->descripcion_nodo = $request->descripcion_nodo;
        $nodo->save();

        return redirect()->route('nodos.index');
    }

    public function show(Nodos $nodo)
    {
        return view('paginas/nodos/show', compact('nodo'));
    }

    public function edit(Nodos $nodo)
    {
        return view('paginas/nodos/edit', compact('nodo'));
    }

    public function update(Request $request, Nodos $nodo)
    {
        $this->validate($request, [
            'partidas_id' => 'required',
            'descripcion_nodo' => 'required',
        ]);

        $nodo->partidas_id = $request->partidas_id;
        $nodo->descripcion_nodo = $request->descripcion_nodo;
        $nodo->save();

        return redirect()->route('nodos.index');
    }

    public function destroy(Nodos $nodo)
    {
        $nodo->delete();
        return redirect()->route('nodos.index');
    }
}
