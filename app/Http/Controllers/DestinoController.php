<?php

namespace App\Http\Controllers;
use App\Models\Destino;
use Illuminate\Http\Request;

class DestinoController extends Controller
{
    public function index()
    {
        $destino = Destino ::orderBy('id', 'desc')->get();
        return view('Destino.index', compact('destino'));
    }

    public function create()
    {
        return view('Destino.create');
    }

    public function store(Request $request)
    {
        $destino = new Destino();
        $destino-> codigo = $request->codigo;
        $destino-> nombre = $request->nombre;
        $destino-> otros_datos = $request-> otros_datos;
      

        $destino->save();

            // $table->integer('codigo');
            // $table->string('nombre');
            // $table->string('otros_datos');

        return redirect()->route('Destino.index');
    }

    public function destroy(Destino $destino)
    {
        $destino -> delete();
        return redirect()->route('Destino.index');
    }

    public function show(Destino $destino)
    {
        return view('Destino.show', compact('destino'));
    }

    public function edit(Destino $destino)
    {
        return view('Destino.edit', compact('destino'));
    }

    public function update(Request $request, Destino $destino)
    {
        $destino-> codigo = $request->codigo;
        $destino-> nombre = $request->nombre;
        $destino-> otros_datos = $request-> otros_datos;
      
        $destino->save();

        return redirect()->route('Destino.index');
    }
}
