<?php

namespace App\Http\Controllers;

use App\Models\Links;
use Illuminate\Http\Request;

class LinksController extends Controller
{
    public function index()
    {
        $link = Links::orderBy('id')->get();
        return view('paginas/links/index', compact('link'));
    }

    public function create()
    {
        return view('paginas/links/create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'id_nodo_origen_link' => 'required',
            'id_nodo_destino_link' => 'required',
            'descripcion_link' => 'required',
        ]);

        $link = new Links();
        $link->id_nodo_origen_link = $request->id_nodo_origen_link;
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

