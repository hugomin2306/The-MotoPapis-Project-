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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paginas/nodos/create');
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
            'ID_NODO' => 'required',
            'ID_CAMINO' => 'required',
            'ID_PARTIDA' => 'required',
        ]);

        $nodo = new Nodo();
        $nodo->ID_NODO = $request->ID_NODO;
        $nodo->ID_CAMINO = $request->ID_CAMINO;
        $nodo->ID_PARTIDA = $request->ID_PARTIDA;

        return redirect()->route('nodos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nodos  $nodos
     * @return \Illuminate\Http\Response
     */
    public function show(Nodos $nodos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nodos  $nodos
     * @return \Illuminate\Http\Response
     */
    public function edit(Nodos $nodo)
    {
        return view('views/nodos/edit', compact('nodo'));
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
            'id_nodo' => 'required',
            'id_partida' => 'required',
            'descripcion_nodo' => 'required',
        ]);

        $nodo->id_nodo = $request->id_nodo;
        $nodo->id_partida = $request->id_partida;
        $nodo->descripcion_nodo = $request->descripcion_nodo;

        $nodo->save();

        return redirect()->route('nodos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nodos  $nodos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nodos $nodos)
    {
        $nodos->delete();
        return redirect()->route('nodos.index');
    }
}
