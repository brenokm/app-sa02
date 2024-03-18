<?php

namespace App\Http\Controllers;

use App\Models\disciplinas;
use App\Http\Requests\StoredisciplinasRequest;
use App\Http\Requests\UpdatedisciplinasRequest;

class DisciplinasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     $disciplinas=\App\Models\disciplinas::all();
     return view('disciplinas',['disciplinas'=> $disciplinas  ]);
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
    public function store(StoredisciplinasRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(disciplinas $disciplinas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(disciplinas $disciplinas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatedisciplinasRequest $request, disciplinas $disciplinas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(disciplinas $disciplinas)
    {
        //
    }
}
