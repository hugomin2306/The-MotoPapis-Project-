<?php

namespace App\Http\Controllers;

use App\Models\Nodos;
use Illuminate\Http\Request;

class NodosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nodo = Nodos::orderBy('id')->get();
        return view('paginas/Nodos/index', compact('nodo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paginas/Nodos/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
            'id_partida' => 'required',
            'descripcion_nodo' => 'required',
        ]);

        $nodo = new Nodos();
        $nodo->id = $request->id;
        $nodo->id_partida = $request->id_partida;
        $nodo->descripcion_nodo = $request->descripcion_nodo;
//        $nodo->save();

        return redirect()->route('nodo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nodos  $nodos
     * @return \Illuminate\Http\Response
     */
    public function show(Nodos $nodo)
    {
        return view('paginas/Nodos/show', compact('nodo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nodos  $nodos
     * @return \Illuminate\Http\Response
     */
    public function edit(Nodos $nodo)
    {
        return view('paginas/Nodos/edit', compact('nodo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nodos  $nodos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nodos $nodo)
    {
        $this->validate($request, [
            'id' => 'required',
            'id_partida' => 'required',
            'descripcion_nodo' => 'required',
        ]);

        $nodo->id = $request->id_nodo;
        $nodo->id_partida = $request->id_partida;
        $nodo->descripcion_nodo = $request->descripcion_nodo;

        $nodo->save();

        return redirect()->route('nodo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nodos  $nodos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nodos $nodo)
    {
        $nodo->delete();
        return redirect()->route('nodo.index');
    }
}
