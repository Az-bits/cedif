<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\Helpers;
use App\Http\Controllers\BackendController;
use App\Models\AutoridadesModel;
use App\Models\AutoridadModel;
use App\Models\PersonaModel;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AutoridadesController extends BackendController
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->title = 'Autoridades';
        $this->page = 'autoridades';
    }
    public function index(): View
    {
        //
        $data = new AutoridadModel();
        $autoridades = $data->getAll();
        foreach ($autoridades as $a) {
            $a->image = Helpers::getImage($a->url);
        }
        $this->data['autoridades'] = $autoridades;
        return $this->render("autoridades.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $personas = PersonaModel::where('estado', '1')->get();
        $this->data['personas'] = $personas;
        return $this->render("autoridades.form");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_persona' => 'required',
            'imagen' => 'file|max:10000|mimes:png,jpg,jpeg',
            'cargo' => 'required',
            'id_persona.required' => 'Seleccione una persona.',
        ]);
        // dd(Helpers::__fileUpload($request, 'imagen', 'publicaciones'));

        if ($idImage = Helpers::__fileUpload($request, 'imagen', 'autoridades')) {
            AutoridadModel::create([
                'id_persona' => $request->id_persona,
                'cargo' => $request->cargo,
                'estado' => $request->estado ?? '1',
                'nivel_titulo' => $request->nivel_titulo,
                'id_multimedia' => $idImage,
            ]);
            return redirect()->route('admin-autoridad.index')->with('success', 'Autoridad registrada exitosamente!');
        }
        return redirect()->route('admin-autoridad.index')->with('error', 'Error al subir la imagen');
    }

    /**
     * Display the specified resource.
     */
    public function show(AutoridadModel $autoridadModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = new AutoridadModel();
        $personas = PersonaModel::where('estado', '1')->get();
        $autoridad = $data->getAll(intval($id));
        $persona = PersonaModel::find($autoridad->id_persona);
        $autoridad->image = Helpers::getImage($autoridad->url);

        $this->data['personas'] = $personas;
        $this->data['autoridad'] = $autoridad;
        $this->data['persona'] = $persona;
        // dd($this->data);

        return $this->render('autoridades.edit-form');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AutoridadModel $autoridad)
    {
        // dd($_POST);
        $request->validate(
            [
                'id_persona' => 'required',
                'imagen' => 'file|max:10000|mimes:png,jpg,jpeg',
                'cargo' => 'required',
            ],
            [
                'id_persona.required' => 'Seleccione una persona.',
            ]
        );

        $idImagen = Helpers::__fileUpload($request, 'imagen', 'autoridades', $autoridad->id_multimedia);
        $autoridad->update([
            'id_persona' => $request->id_persona,
            'cargo' => $request->cargo,
            'nivel_titulo' => $request->nivel_titulo,
        ], $idImagen ? ['id_multimedia' => $idImagen] : []);

        // Redirigir con un mensaje de éxito
        return redirect()->route('admin-autoridad.index')->with('success', 'Autoridad actualizada exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AutoridadModel $autoridad)
    {
        $autoridad->update(['estado' => '0']);
        return redirect()->route('admin-autoridad.index')->with('success', 'Autoridad eliminada exitosamente!');
    }
}
