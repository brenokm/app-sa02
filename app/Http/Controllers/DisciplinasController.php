<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\disciplinas;
use App\Http\Requests\StoredisciplinasRequest;
use App\Http\Requests\UpdatedisciplinasRequest;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Node\Stmt\Return_;

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
        return view('form-incluir-disciplina');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $disciplina=new \App\Models\disciplinas;
        $disciplina->create(['disciplina'=>$request ->disciplina]);

        return Redirect()->route('disciplinas');
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
    public function update(Request $request, disciplinas $disciplinas)
    {
     
        $atualizar = \App\Models\disciplinas::find($request->id);
        $atualizar -> disciplina = $request->disciplina;

        $atualizar->save();

        return Redirect()->route('disciplinas'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)

    
    {
        \App\Models\disciplinas::find($id)->delete();
        return Redirect()->route('disciplinas'); 

    }
}
