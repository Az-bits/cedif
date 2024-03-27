<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\Helpers;
use App\Http\Controllers\BackendController;
use App\Models\AutoridadesModel;
use App\Models\PersonaModel;
use Illuminate\Http\Request;

class AutoridadesController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->title = 'Autoridades';
        $this->page = 'autoridades';
    }
    public function index()
    {
        $data = new AutoridadesModel();
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
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
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
            AutoridadesModel::create([
                'id_persona' => $request->id_persona,
                'cargo' => $request->cargo,
                'estado' => $request->estado ?? '1',
                'id_multimedia' => $idImage,
            ]);
            return redirect()->route('admin-autoridades.index')->with('success', 'Autoridad registrada exitosamente!');
        }
        return redirect()->route('admin-autoridades.index')->with('error', 'Error al subir la imagen');
    }

    /**
     * Display the specified resource.
     */
    public function show(AutoridadesModel $autoridadesModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PublicacionModel  $publicacionModel
     * @return \Illuminate\Http\Response
     */

    public function edit(AutoridadesModel $autoridad)
    {
        $data = new AutoridadesModel();
        $personas = PersonaModel::where('estado', '1')->get();
        $this->data['personas'] = $personas;
        $persona = PersonaModel::find($autoridad->id_persona);
        $autoridad = $data->getAll($autoridad->id_autoridad)[0];
        $autoridad->image = Helpers::getImage($autoridad->url);


        $this->data['autoridad'] = $autoridad;
        $this->data['persona'] = $persona;

        return $this->render('autoridades.edit-form');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PublicacionModel  $publicacionModel
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, AutoridadesModel $autoridades)
    {
        $request->validate(
            [
                'id_persona' => 'required',
                // 'imagen' => 'file|max:10000|mimes:png,jpg,jpeg',
                // 'cargo' => 'required',
                // 'id_persona.required' => 'Seleccione una persona.',
            ]
        );

        $idImagen = Helpers::__fileUpload($request, 'imagen', 'autoridades', $request->id_multimedia);
        $autoridades->update(array_merge([
            'id_persona' => $request->id_persona,
            'cargo' => $request->cargo,
        ], $idImagen ? ['id_multimedia' => $idImagen] : []));

        // Redirigir con un mensaje de éxito
        return redirect()->route('admin-autoridades.index')->with('success', 'Autoridad actualizada exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AutoridadesModel $autoridad)
    {
        $autoridad->update(['estado' => '0']);
        return redirect()->route('admin-autoridades.index')->with('success', 'Autoridad eliminada exitosamente!');
    }
}
