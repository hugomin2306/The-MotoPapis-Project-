<?php

namespace App\Http\Controllers;

use App\Models\Partidas;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PartidasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $partida = Partidas::orderBy('id')->get();
        return view('paginas/partidas/index', compact('partida', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect()->route('partidas.store');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $date = Carbon::now();
        $id = Auth::id();
        $partidas = new Partidas();
        $partidas->id_jugador = $id;
        $partidas->fecha_inicio = $date;
        $partidas->save();

        return redirect()->route('nodos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Partidas  $partida
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
    public function edit(Partidas $partida)
    {
        return view('paginas/partidas/edit', compact('partida'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Partidas  $partidas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partidas $partida)
    {
         $this->validate($request, [
            'id_jugador' => 'required',
            'fecha_inicio' => 'required',
        ]);


        $partida->id_jugador = $request->id_jugador;
        $partida->fecha_inicio = $request->fecha_inicio;
        $partida->save();

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
        return redirect()->route('partidas.create');
    }
}
