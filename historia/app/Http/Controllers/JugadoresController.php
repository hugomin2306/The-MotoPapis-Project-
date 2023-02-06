<?php

namespace App\Http\Controllers;

use App\Models\Jugadores;
use Illuminate\Http\Request;

class JugadoresController extends Controller
{

    public function index()
    {
        $jugadores = Jugadores::orderBy('id_partida')->get();
        return view('paginas/jugadores/index', compact('jugadores'));
    }


    public function create()
    {
        return view('paginas/jugadores/create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre_jugador' => 'required',
            'clave_jugador' => 'required',

        ]);

        $jugadores = new Jugadores();
        $jugadores->clave_jugador = $request->clave_jugador;
        $jugadores->nombre_jugador = $request->nombre_jugador;

        $jugadores->save();

        return redirect()->route('juego');
    }


    public function show(Jugadores $jugadores)
    {
        return view('paginas/jugadores/login', compact('jugadores'));

    }


    public function edit(Jugadores $jugadores)
    {
        return view('paginas/jugadores/edit', compact('jugadores'));
    }


    public function update(Request $request, Jugadores $jugadores)
    {
        $this->validate($request, [
            'id_partida' => 'required',
            'nombre_jugador' => 'required',
            'fecha_registro' => 'required',

        ]);

        $jugadores->id_partida = $request->id_partida;
        $jugadores->nombre_jugador = $request->nombre_jugador;
        $jugadores->fecha_registro = $request->fecha_registro;

        $jugadores->save();

        return redirect()->route('jugadores.index');
    }


    public function destroy(Jugadores $jugadores)
    {
        $jugadores->delete();
        return redirect()->route('jugadores.index');
    }
        public function authenticate(Request $request)
    {
        $this->validate($request, [
            'nombre_jugador' => 'required',
            'clave_jugador' => 'required'
            ]);
        $jugadores = Jugadores::orderBy('nombre_jugador')->get();


        foreach ($jugadores as $jugador) {
            if(strcmp($jugador->nombre_jugador, $request->nombre_jugador) == 0
            and strcmp($jugador->clave_jugador, $request->clave_jugador) == 0){
                return redirect()->route('juego');
            } else {
                return view('/jugadores/login');
            }
        }

    }

    public function login()
    {
        return view('pagina/jugadores/login');
    }
}
