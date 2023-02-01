<?php

namespace App\Http\Controllers;

use App\Models\Links;
use App\Models\Nodos;
use Illuminate\Http\Request;

class LinksController extends Controller
{
    public function index()
    {
        $link = Links::orderBy('id')->get();
        return view('paginas/links/index', compact('link'));
    }

    public function create(Request $request)
    {
        $id = $request->input('id');
        $nodo = Nodos::find($id);
        return view('paginas/links/create', compact('nodo'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'id_nodo_origen_link' => 'required',
            'id_nodo_destino_link' => 'required',
            'descripcion_link' => 'required',
        ]);

        $link = new Links();
        $nodo = new Nodos();
        $link->id_nodo_origen_link = $request->id_nodo_origen_link;
        $nodo->id = $request->id;
        $link->id_nodo_destino_link = $request->id_nodo_destino_link;
        $link->descripcion_link = $request->descripcion_link;
        $link->save();

        return redirect()->route('links.index');
    }

    public function show(Links $link)
    {
        return view('paginas/links/show', compact('link'));
    }

    public function edit(Links $link)
    {
        return view('paginas/links/edit', compact('link'));
    }

    public function update(Request $request, Links $link)
    {
        $this->validate($request, [
            'id_nodo_origen_link' => 'required',
            'id_nodo_destino_link' => 'required',
            'descripcion_link' => 'required',
        ]);

        $link->id_nodo_origen_link = $request->id_nodo_origen_link;
        $link->id_nodo_destino_link = $request->id_nodo_destino_link;
        $link->descripcion_link = $request->descripcion_link;

        $link->save();

        return redirect()->route('links.index');
    }

    public function destroy(Links $link)
    {
        $link->delete();
        return redirect()->route('links.index');
    }
}

