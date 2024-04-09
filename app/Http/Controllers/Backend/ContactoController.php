<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\BackendController;
use App\Models\ContactoModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactoController extends BackendController
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->title = 'Contacto';
        $this->page = 'contacto';
    }
    public function index()
    {
        $contacto = ContactoModel::whereIn('estado', ['1', '2'])->get();
        $this->data['contacto'] = $contacto;
        return $this->render("contacto.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return $this->render("contacto.form");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($_POST);
        $request->validate([
            'nombre' => 'required|max:50',
            'email' => 'required|email',
            'celular' => 'required|numeric|digits:8',
            'descripcion' => 'required|max:250',
            'ci' => 'required',
        ], [
            'ci.required' => 'La Cedula de Identidad es requerida.',
        ]);
        ContactoModel::create([
            'ci' => $request->ci,
            'id_usuario' => Auth::id(),
            'nombre' => $request->nombre,
            'email' => $request->email,
            'celular' => $request->celular,
            'descripcion' => $request->descripcion,
            'estado' =>  $request->estado ?? '1'
        ]);
        return redirect()->route('admin-contacto.index')->with('success', 'Nueva solicitud registrada exitosamente!');
    }

    /**
     * Display the specified resource.
     */
    public function show(ContactoModel $contactoModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContactoModel $contacto)
    {
        $this->data['contacto'] = $contacto;
        return $this->render('contacto.edit-form');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ContactoModel $contacto)
    {
        $request->validate([
            'nombre' => 'required|max:50',
            'email' => 'required|email',
            'celular' => 'required|numeric|digits:8',
            'descripcion' => 'required|max:250',
            'ci' => 'required',
        ], [
            'ci.required' => 'La Cedula de Identidad es requerida.',
        ]);
        $contacto->update([
            'ci' => $request->ci,
            'id_usuario' => Auth::id(),
            'nombre' => $request->nombre,
            'email' => $request->email,
            'celular' => $request->celular,
            'descripcion' => $request->descripcion,
            'estado' =>  $request->estado ?? '1'
        ]);
        return redirect()->route('admin-contacto.index')->with('success', 'Solicitud revisada exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContactoModel $contacto)
    {
        $contacto->update(['estado' => '0']);
        return redirect()->route('admin-contacto.index')->with('success', 'Solicitud eliminada exitosamente!');
    }
}
