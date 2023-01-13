@extends('layout')
@section('content')
    <div class="container-fluid m-auto p-4 position-static h-auto shadow-sm" id="pesquisar">
        <div class="container">
            <form class="row g-3" method="POST" action="{{route('aits.pesquisar')}}">

                @csrf

                <fieldset class="shadow-sm p-4">
                    <legend>Pesquisa Pelo Número da Autuação</legend>
                    <div class="row p-2 align-content-center">
                        <div class="col-md-2">
                            <input type="text" name="prefixo" class="form-control" placeholder="Prefixo" >
                        </div>
                        _
                        <div class="col-md-2">
                            <input type="text" name="ano" class="form-control" placeholder="Ano" >
                        </div>
                        _
                        <div class="col-md-3">
                            <input type="text" name="cod_ait" class="form-control" placeholder="Número da Autuação" >
                        </div>

                        <div class="col-md-3">
                            <button type="submit" class="btn btn-primary btn-md">Pesquisar</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>

        <div class="container align-content-justify">
            <form class="row g-3" method="POST" action="{{route('aits.pesquisar')}}">

                @csrf

                <fieldset class="shadow-sm p-4">

                    <legend>Pesquisa Avançada</legend>

                    <div class="row p-2 align-content-center mb-6">
                        <div class="col-md-3">
                            <input type="text" name="codigo_infracao" class="form-control" placeholder="Código da Infração">
                        </div>
                    </div>

                    <div class="row p-2 align-content-center mb-6">
                        <div class="col-md-3">
                            <input type="text" name="cidade" class="form-control"  placeholder="Cidade">
                        </div>
                        <div class="col-md-3">
                            <input type="text" name="bairro" class="form-control"  placeholder="Bairro">
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="logradouro" class="form-control"  placeholder="Logradouro">
                        </div>
                    </div>

                    <div class="row p-2 align-content-center mb-6">
                        <div class="col-md-3">
                            <input type="text" name="orgão_autuador" class="form-control" placeholder="Orgão Autuador">
                        </div>
                        <div class="col-md-3">
                            <input type="text" name="matricula" class="form-control" placeholder="Matrícula Agente ">
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="nome" class="form-control" placeholder="Nome Agente ">
                        </div>
                    </div>

                    <div class="row p-2 align-content-center mb-6">
                        <div class="col-md-3">
                            <input type="date" name="data_inicial" id="dtInicial" class="form-control">
                        </div>

                        <div class="col-md-3">
                            <input type="date" name="data_final" id="dtFinal" class="form-control">
                        </div>

                        <div class="col-md-2">
                            <select name="status" class="form-select">
                                <option value="">Situação</option>
                                <option value="1">Finalizadas</option>
                                <option value="0">Pendentes</option>
                            </select>
                        </div>

                        <fieldset class="p-4">
                            <div class="row p-2">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary btn-md">Pesquisar</button>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection
