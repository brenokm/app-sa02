<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

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
    public function edit(Request $request)
    {
        $disciplina = \App\Models\disciplinas::find($request->id);

        return view('form-disciplina',['disciplina'=>$disciplina]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatedisciplinasRequest $request, disciplinas $disciplinas)
    {
     
        dd($request);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(disciplinas $disciplinas)
    {
        //
    }
}
