<?php

namespace App\Http\Controllers;

use App\Models\Partidas;
use Illuminate\Http\Request;

class PartidasController extends Controller
{

    public function index()
    {
        $partida = Partidas::orderBy('id')->get();
        return view('paginas/partidas/index', compact('partida'));
    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }


    public function show(Partidas $partidas)
    {

    }


    public function edit(Partidas $partidas)
    {

    }


    public function update(Request $request, Partidas $partidas)
    {

    }

    public function destroy(Partidas $partidas)
    {

    }
}
