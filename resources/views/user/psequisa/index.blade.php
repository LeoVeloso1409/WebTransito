@extends('layout')

@section('content')
    <div class="container-fluid m-auto p-4 position-static h-auto d-md-inline-flex shadow-sm" id="table">
        <table class="table table-primary table-striped caption-top">
            <caption>Lista Usuários Ativos</caption>
            <div style="background-color:red">
                {{$msg}}
            </div>
            <thead class="table-dark">
                <tr>
                    <th scope="col">Matrícula</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Orgão</th>
                    <th scope="col">Situação</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <th scope="row">{{$user->matricula}}</th>
                        <td>{{$user->nome}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->orgao}}</td>
                        <td>{{($user->status == 0)? 'INATIVO' :'ATIVO'}}</td>
                        <td>
                            <a href="{{route('edit.user', ['id' => $user->id])}}"> <button class="btn btn-sm btn-secondary">Editar</button></a>
                        </td>
                        <td>
                            <a href="{{route('delete.user', ['id' => $user->id])}}"> <button class="btn btn-sm btn-danger">Excluir</button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="container-fluid w-100" >
        <div class="row p-2">
            <div class="col-md-2">
                {{$users->appends($request)->links()}}
            </div>
            <div class="col-md-6"></div>
            <div class="col-md-4">
                <caption>Exibindo {{$users->count()}} Usuários de {{$users->total()}}</caption>
            </div>
        </div>
    </div>
@endsection


