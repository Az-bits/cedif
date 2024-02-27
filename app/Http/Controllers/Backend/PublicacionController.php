<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\BackendController;
use App\Models\PublicacionModel;
use Illuminate\Http\Request;

class PublicacionController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->title = "Publicación";
        $this->page = "publicacion";
        return $this->render("publicacion.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        dd('create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PublicacionModel  $publicacionModel
     * @return \Illuminate\Http\Response
     */
    public function show(PublicacionModel $publicacionModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PublicacionModel  $publicacionModel
     * @return \Illuminate\Http\Response
     */
    public function edit(PublicacionModel $publicacionModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PublicacionModel  $publicacionModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PublicacionModel $publicacionModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PublicacionModel  $publicacionModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(PublicacionModel $publicacionModel)
    {
        //
    }
}
