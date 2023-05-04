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
    $user = $request->user();

    // Obtener los datos del formulario
    $titulo = $request->input('titulo');
    $contenido = $request->input('contenido');
    $userid = $user->id;
    $username = $user->name;

    // Crear una nueva instancia del modelo Articulo con los datos del formulario
    $tarea = new Tarea;
    $tarea->titulo = $titulo;
    $tarea->contenido = $contenido;
    $tarea->user_id = $userid;
    $tarea->user_name = $username;



    // Guardar el artículo en la base de datos
    $tarea->save();

    // Redireccionar a la página de inicio o a otra página
    return redirect('/articulos');
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
    public function edit(Tarea $tarea)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tarea $tarea)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tarea $tarea)
    {
        //
    }
}
