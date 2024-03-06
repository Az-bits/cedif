<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\BackendController;
use App\Models\PersonaModel;
use Illuminate\Http\Request;

class PersonaController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $persona = PersonaModel::where('estado', '1')->get();
        $this->data['personas'] = $persona;
        $this->title = "Personas";
        $this->page = "persona";
        return $this->render("persona.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $this->title = "Personas";
        return $this->render("persona.form");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($_POST);
        $request->validate([
            'nombre' => 'required|max:50',
            'email' => 'required|email',
            'celular' => 'required|numeric|digits:8',
            'ci' => 'required|unique:persona,ci',
        ], [
            'ci.unique' => 'La Cedula de Identidad ya está registrada.',
        ]);

        PersonaModel::create([
            'ci' => $request->ci,
            'nombre' => $request->nombre,
            'paterno' => $request->paterno,
            'materno' => $request->materno,
            'celular' => $request->celular,
            'fecha_nac' => $request->fecha_nac,
            'email' => $request->email,
            'estado' => '1'
        ]);
        return redirect()->route('admin-persona.index')->with('success', 'Nueva persona creada exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PersonaModel  $personaModel
     * @return \Illuminate\Http\Response
     */
    public function show(PersonaModel $personaModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PersonaModel  $personaModel
     * @return \Illuminate\Http\Response
     */
    public function edit(PersonaModel $persona)
    {
        $this->data['persona'] = $persona;
        return $this->render('persona.edit-form');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PersonaModel  $personaModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PersonaModel $persona)
    {
        $request->validate(
            [
                'nombre' => 'required|max:50',
                'email' => 'required|email',
                'celular' => 'required|numeric|digits:8',
                'ci' => 'required',
            ]
        );
        $persona->update($request->all());
        return redirect()->route('admin-persona.index')->with('success', 'Persona actualizada exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PersonaModel  $personaModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(PersonaModel $persona)
    {
        $persona->update(['estado' => '0']);

        return redirect()->route('admin-persona.index')->with('success', 'Persona eliminada exitosamente!');
    }
}
