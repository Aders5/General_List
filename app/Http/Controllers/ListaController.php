<?php

namespace App\Http\Controllers;

use App\Models\Lista;
use Illuminate\Http\Request;

class ListaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listas = Lista::all();
        return view('listas.lista_index', compact('listas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('listas.lista_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
        'titulo' => 'required|min:0|max:50',
        'contenido' => 'required|min:0|max:255',
        'vigencia' => 'required|date|after_or_equal:today'
       ]);

       $lista = new Lista();
       $lista->titulo = $request->titulo;
       $lista->contenido = $request->contenido;
       $lista->vigencia = $request->vigencia;
       $lista->save();

       return redirect()->route('listas.create')->with('info', '¡Formulario Recibido!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Lista $lista)
    {
        return view('listas.lista_show', compact('lista'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lista $lista)
    {
        return view('listas.lista_edit', compact('lista'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lista $lista)
    {
        $request->validate([
        'titulo' => 'required|min:0|max:50',
        'contenido' => 'required|min:0|max:255',
        'vigencia' => 'required|date|after_or_equal:today'
       ]);

       
       $lista->titulo = $request->titulo;
       $lista->contenido = $request->contenido;
       $lista->vigencia = $request->vigencia;
       $lista->save();

       return redirect()->route('listas.show', $lista);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lista $lista)
    {
        $lista->delete();
        return redirect()->route('listas.index');
    }
}

