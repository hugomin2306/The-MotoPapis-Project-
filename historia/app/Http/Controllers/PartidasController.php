<?php

namespace App\Http\Controllers;

use App\Models\Nodos;
use App\Models\Partidas;
use Illuminate\Http\Request;

class PartidasController extends Controller
{

    public function index()
    {

        $partidas = Nodos::orderBy('id')->get();
        return view('paginas/partidas/index', compact('partidas'));


    }


    public function create()
    {
        return view('paginas/partidas/create');
    }


    public function store(Request $request)
    {
            $this->validate($request, [
            'id_jugador' => 'required',
            'fecha_inicio' => 'required',
            'fecha_fin' => 'required',
            'minutos_jugador' => 'required',
        ]);

        $partidas = new Partidas();
        $partidas->id_jugador = $request->id_jugador;
        $partidas->fecha_inicio = $request->fecha_inicio;
        $partidas->fecha_fin = $request->fecha_fin;
        $partidas->minutos_jugador = $request->minutos_jugador;
        $partidas->save();

        return redirect()->route('partidas.index');
    }


    public function show(Partidas $partidas)
    {
        return view('paginas/partidas/show', compact('partidas'));
    }

    public function edit(Partidas $partidas)
    {
        return view('paginas/partidas/edit', compact('partidas'));
    }


    public function update(Request $request, Partidas $partidas)
    {
         $this->validate($request, [
            'id_jugador' => 'required',
            'fecha_inicio' => 'required',
            'fecha_fin' => 'required',
            'minutos_jugador' => 'required',
        ]);


        $partidas->id_jugador = $request->id_jugador;
        $partidas->fecha_inicio = $request->fecha_inicio;
        $partidas->fecha_fin = $request->fecha_fin;
        $partidas->minutos_jugador = $request->minutos_jugador;
        $partidas->save();

        return redirect()->route('partidas.index');
    }


    public function destroy(Partidas $partidas)
    {
        $partidas->delete();
        return redirect()->route('partidas.index');
    }
}
