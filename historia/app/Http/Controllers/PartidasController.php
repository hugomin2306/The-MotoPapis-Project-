<?php

namespace App\Http\Controllers;

use App\Models\Partidas;
use Illuminate\Http\Request;

class PartidasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partida = Partidas::orderBy('id')->get();
        return view('paginas/partidas/index', compact('partida'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paginas/partidas/create');
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
            'id_jugador' => 'required',
            'fecha_inicio' => 'required',
            'fecha_fin' => 'required',
        ]);

        $partidas = new Partidas();
        $partidas->id_jugador = $request->id_jugador;
        $partidas->fecha_inicio = $request->fecha_inicio;
        $partidas->fecha_fin = $request->fecha_fin;
        $partidas->save();

        return redirect()->route('partidas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Partidas  $partidas
     * @return \Illuminate\Http\Response
     */
    public function show(Partidas $partidas)
    {
        return view('paginas/partidas/show', compact('partidas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partidas  $partidas
     * @return \Illuminate\Http\Response
     */
    public function edit(Partidas $partidas)
    {
        return view('paginas/partidas/edit', compact('partidas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Partidas  $partidas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partidas $partidas)
    {
         $this->validate($request, [
            'id_jugador' => 'required',
            'fecha_inicio' => 'required',
            'fecha_fin' => 'required',
        ]);


        $partidas->id_jugador = $request->id_jugador;
        $partidas->fecha_inicio = $request->fecha_inicio;
        $partidas->fecha_fin = $request->fecha_fin;
        $partidas->save();

        return redirect()->route('partidas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partidas  $partidas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partidas $partidas)
    {
        $partidas->delete();
        return redirect()->route('partidas.index');
    }
}
