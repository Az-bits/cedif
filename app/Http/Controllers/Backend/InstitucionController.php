<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\BackendController;
use App\Models\InstitucionModel;
use Illuminate\Http\Request;

class InstitucionController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        // parent::__construct();
        parent::index();
    }
    public function index()
    {
        //
        // return view("backend.institucion.index");
        // dd($this->name);
        $this->title = "Institución";
        $this->page = "institucion";
        return  $this->render("institucion.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InstitucionModel  $institucionModel
     * @return \Illuminate\Http\Response
     */
    public function show(InstitucionModel $institucionModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InstitucionModel  $institucionModel
     * @return \Illuminate\Http\Response
     */
    public function edit(InstitucionModel $institucionModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InstitucionModel  $institucionModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InstitucionModel $institucionModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InstitucionModel  $institucionModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(InstitucionModel $institucionModel)
    {
        //
    }
}
