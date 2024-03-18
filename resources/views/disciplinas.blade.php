@extends('layouts.app')
@section("content")

<table class="table table-hover table-striped"> 
    <thead>
        <tr>
            <th>ID</th>
            <th>Disciplinas</th>
            <th>Criado em</th>
            <th>Atualizado em</th>

        </tr>
    </thead>

    <tbody>
        @foreach($disciplinas as $disciplina)

        <tr>
            <td>{{$disciplina->id}}</td>
            <td>{{$disciplina->disciplina}}</td>
            <td>{{$disciplina->created_at}}</td>
            <td>{{$disciplina->updated_at}}</td>       
        </tr>

        @endforeach
    </tbody>

</table>

@endsection