@extends('layout')
@section('content')
    <div class="container-fluid m-auto p-4 position-static h-auto shadow-sm" id="pesquisar">
        <div class="container">
            <form class="row g-3" method="POST" action="{{route('pesquisar.user')}}">

                @csrf

                <fieldset class="shadow-sm p-4">
                    <legend>Pesquisa de Usuário</legend>
                    <div class="row p-2 align-content-center">
                        <div class="col-md-3">
                            <input type="text" name="matricula" class="form-control" placeholder="Matrícula" >
                        </div>

                        <div class="col-md-5">
                            <input type="text" name="nome" class="form-control" placeholder="Nome" >
                        </div>

                        <div class="col-md-2">
                            <select name="orgao" class="form-select">
                                <option value="">Institução</option>
                                <option value="PMMG">PMMG</option>
                                <option value="PCMG">PCMG</option>
                            </select>
                        </div>

                        <div class="col-md-2">
                            <select name="status" class="form-select">
                                <option value="">Situação</option>
                                <option value="1">Ativo</option>
                                <option value="0">Inativo</option>
                            </select>
                        </div>
                    </div>

                    <div class="row p-2 align-content-center">
                        <div class="col-md">
                            <button type="submit" class="btn btn-primary btn-md">Pesquisar</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection
