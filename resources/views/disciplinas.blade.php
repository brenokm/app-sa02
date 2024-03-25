@extends('layouts.app')
@section("content")

 <a href="{{route('disciplina.novo')}}" class="btn btn-primary">novo</a>
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
            <td>
            <a href="{{  route('editar', [ 'id' => $disciplina->id] ) }}"
            class="btn btn-info btn-sm">Editar</a>
            <a href="{{ route('disciplina.excluir',['id'=> $disciplina->id ])}}"class="btn btn-danger btn-sm">Excluir</a>
            </td>     
        </tr>

        @endforeach
    </tbody>
    <tfoot>
    <tr>
    <th colspan="5">
    Número de registros: {{App\Models\Disciplinas::count()}} </th>

    </tr>
    </tfoot>

</table>

@endsection