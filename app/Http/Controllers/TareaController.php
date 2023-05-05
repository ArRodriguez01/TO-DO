<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tarea = Tarea::all();

        return view('tareas',compact('tarea'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    $titulo = $request->input('titulo');
    $contenido = $request->input('contenido');

    $tarea = new Tarea;
    $tarea->titulo = $titulo;
    $tarea->contenido = $contenido;
    $tarea->save();

    return redirect('/tarea');
}

    /**
     * Display the specified resource.
     */
    public function show(Tarea $tarea)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $tarea = Tarea::find($id);
        return view('edit', compact('tarea'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
    $tareas = Tarea::find($id);

    $tareas->titulo = $request->input('titulo');
    $tareas->contenido = $request->input('contenido');

    $tareas->save();

    $tarea = Tarea::all();

    return view('tareas',compact('tarea'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $tarea = Tarea::find($id);
        if ($tarea) {
            $tarea->delete();
        }
        return redirect()->route('tarea.index');
    }
}
