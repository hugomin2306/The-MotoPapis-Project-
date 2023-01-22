<?php

namespace App\Http\Controllers;

use App\Models\Finales;
use Illuminate\Http\Request;

class FinalesController extends Controller
{

    public function index()
    {
        $finales = Finales::orderBy('id_final')->get();
        return view('paginas/finales/index', compact('finales'));
    }


    public function create()
    {
        return view('paginas/finales/create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'id_final' => 'required',
            'nombre_final' => 'required',
            'descripcion_final' => 'required',

        ]);

        $finales = new Finales();
        $finales->id_final = $request->id_final;
        $finales->nombre_final = $request->nombre_final;
        $finales->descripcion_final = $request->descripcion_final;

        $finales->save();

        return redirect()->route('finales.index');
    }


    public function show(Finales $finales)
    {
        return view('paginas/finales/show', compact('finales'));
    }


    public function edit(Finales $finales)
    {
        return view('paginas/finales/edit', compact('finales'));
    }


    public function update(Request $request, Finales $finales)
    {
        $this->validate($request, [
            'id_final' => 'required',
            'nombre_final' => 'required',
            'descripcion_final' => 'required',

        ]);

        $finales->id_final = $request->id_final;
        $finales->nombre_final = $request->nombre_final;
        $finales->descripcion_final = $request->descripcion_final;

        $finales->save();

        return redirect()->route('finales.index');
    }


    public function destroy(Finales $finales)
    {
        $finales->delete();
        return redirect()->route('finales.index');
    }
}
