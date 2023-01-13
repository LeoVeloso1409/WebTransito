@extends('layout')

@section('content')
    <div class="row justify-content-around p-4">
        <div class="col-md-8 w-25 align">
            <div class="input-group">
                <span class="input-group-text">Código AIT</span>
                <input disabled type="text" class="form-control" placeholder="{{$ait->cod_ait}}">
            </div>
        </div>
    </div>
    <div class="container-fluid m-auto p-4 position-static h-auto d-md-inline-flex d-none shadow-sm" id="formAit">

        <form class="row g-3" method="POST" action="{{route('ait.update', $ait->id)}}">

            @csrf
            @method('PATCH')

            <fieldset class="shadow-sm p-4">

                <input hidden name="id" value="{{$ait->id}}">

                <legend>Identificação do Veículo</legend>
                <div class="row p-2">
                    <div class="col-md-3">
                        <input type="text" name="placa" value="{{$veiculo->placa ?? old('placa')}}"
                            class="form-control" placeholder="Placa">
                            <div style="color:red">
                                {{($errors->has('placa')) ? $errors->first('placa') :''}}
                            </div>


                    </div>
                    <div class="col-md-3">
                        <input type="text" name="marca" value="{{$veiculo->marca ?? old('marca')}}"
                            class="form-control" placeholder="Marca">
                            <div style="color:red">
                                {{($errors->has('marca')) ? $errors->first('marca') :''}}
                            </div>
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="modelo" value="{{$veiculo->modelo ?? old('modelo')}}"
                            class="form-control" placeholder="Modelo">
                            <div style="color:red">
                                {{($errors->has('modelo')) ? $errors->first('modelo') :''}}
                            </div>
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="cor" value="{{$veiculo->cor ?? old('cor')}}" class="form-control"
                            placeholder="Cor">
                            <div style="color:red">
                                {{($errors->has('cor')) ? $errors->first('cor') :''}}
                            </div>
                    </div>
                </div>
                <div class="row p-2">

                    <div class="col-md-3">
                        <input type="text" name="chassi" value="{{$veiculo->chassi ?? old('chassi')}}"
                            class="form-control" placeholder="Chassi">
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="pais" value="{{$veiculo->pais ?? old('pais')}}"
                            class="form-control" placeholder="Pais">
                            <div style="color:red">
                                {{($errors->has('pais')) ? $errors->first('pais') :''}}
                            </div>
                    </div>
                    <div class="col-md-4">
                        <select id="especie" name="especie" class="form-select">
                            <option value="{{$ait->especie ?? old('especie')}}">{{$ait->especie ?? 'Espécie'}}</option>
                            <option value="PASSAGEIRO">Passageiro</option>
                            <option value="CARGA">Carga</option>
                            <option value="MISTO">Misto</option>
                            <option value="COMPETIÇÃO">Competição</option>
                            <option value="TRAÇÃO">Tração</option>
                            <option value="ESPECIAL">Especial</option>
                            <option value="COLEÇÃO">Coleção</option>
                        </select>
                        <div style="color:red">
                            {{($errors->has('especie')) ? $errors->first('especie') :''}}
                        </div>
                    </div>
                    <div class="col-md-2">
                        <a data-bs-toggle="modal" data-bs-target="#modal_veiculos" aria-current="page"
                            class="btn btn-primary">Buscar</a>
                    </div>
                </div>

            </fieldset>

            <fieldset class="shadow-sm p-4">
                <legend>Identificação do Condutor</legend>
                <div class="row p-2">
                    <div class="col-md-6">
                        <input type="text" name="nome_condutor" value="{{$condutor->nome ?? old('nome_condutor')}}" class="form-control"
                            placeholder="Nome">
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="cpf_condutor" value="{{$condutor->cpf ?? old('cpf_condutor')}}" class="form-control"
                            placeholder="CPF">
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="rg_condutor" value="{{$condutor->rg ?? old('rg_condutor')}}" class="form-control"
                            placeholder="RG">
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="cnh_condutor" value="{{$condutor->numero_cnh ?? old('cnh_condutor')}}" class="form-control"
                            placeholder="CNH">
                    </div>
                </div>
                <div class="row p-2">

                    <div class="col-md-3">
                        <select id="uf_cnh" name="uf_cnh" class="form-select">
                            <option value="{{$ait->uf_cnh ?? old('uf_cnh')}}">{{$ait->uf_cnh ?? 'UF CNH'}}</option>
                            <option value="MG">MG</option>
                            <option value="SP">SP</option>
                            <option value="BA">BA</option>
                            <option value="...">...</option>
                            <option value="DF">DF</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select id="categoria" name="categoria" class="form-select">
                            <option value="{{$ait->categoria ?? old('categoria')}}">{{$ait->categoria ?? 'Categoria'}}</option>
                            <option value="A">A</option>
                            <option value="AB">AB</option>
                            <option value="ACC">ACC</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>
                            <option value="PPD">PPD</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <input type="date" name="validade_cnh" value="{{$condutor->validade_cnh ?? old('validade_cnh')}}"
                            class="form-control" id="validade_cnh">
                    </div>
                    <div class="col-md-2">
                        <a data-bs-toggle="modal" data-bs-target="#modal_condutores" aria-current="page"
                            class="btn btn-primary">Buscar</a>
                    </div>
                </div>
            </fieldset>

            <fieldset class="shadow-sm p-4">
                <legend>Local/Data/Hora</legend>
                <div class="row p-2">
                    <div class="col-md-5">
                        <input type="text" name="logradouro" value="{{old('logradouro')}}" class="form-control"
                            placeholder="Logradouro">
                            <div style="color:red">
                                {{($errors->has('logradouro')) ? $errors->first('logradouro') :''}}
                            </div>
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="numero" value="{{old('numero')}}" class="form-control"
                            placeholder="Número">
                            <div style="color:red">
                                {{($errors->has('numero')) ? $errors->first('numero') :''}}
                            </div>
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="bairro" value="{{old('bairro')}}" class="form-control"
                            placeholder="Bairro">
                            <div style="color:red">
                                {{($errors->has('bairro')) ? $errors->first('bairro') :''}}
                            </div>
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="cidade" value="{{old('cidade')}}" class="form-control"
                            placeholder="Cidade">
                            <div style="color:red">
                                {{($errors->has('cidade')) ? $errors->first('cidade') :''}}
                            </div>
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-md-5">
                        <input type="date" name="data" value="{{old('data')}}" class="form-control"
                            id="data" placeholder="Validade CNH">
                            <div style="color:red">
                                {{($errors->has('data')) ? $errors->first('data') :''}}
                            </div>
                    </div>
                    <div class="col-md-2">
                        <input type="time" name="hora" value="{{old('hora')}}" class="form-control"
                            id="hora">
                            <div style="color:red">
                                {{($errors->has('hora')) ? $errors->first('hora') :''}}
                            </div>
                    </div>
                    <div class="col-md-2">
                        <input disabled type="text" name="uf_mg" value="MG" class="form-control"
                            placeholder="UF-MG">
                    </div>
                </div>
            </fieldset>

            <fieldset class="shadow-sm p-4">
                <legend>Identificação da Infração</legend>
                <div class="row p-2">
                    <div class="col-md-3">
                        <input type="text" name="codigo_infracao" value="{{old('codigo_infracao')}}"
                            class="form-control" placeholder="Código da Infração">
                            <div style="color:red">
                                {{($errors->has('codigo_infracao')) ? $errors->first('codigo_infracao') :''}}
                            </div>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="descricao" value="{{old('descricao')}}" class="form-control"
                            placeholder="Descrição">
                            <div style="color:red">
                                {{($errors->has('descricao')) ? $errors->first('descricao') :''}}
                            </div>
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-md-3">
                        <input type="text" name="equipamento_afericao" value="{{old('equipamento_afericao')}}"
                            class="form-control" placeholder="Equipamento Aferição">
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="medicao_realizada" value="{{old('medicao_realizada')}}"
                            class="form-control" placeholder="Medição Realizada">
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="limite_regulamentado" value="{{old('limite_regulamentado')}}"
                            class="form-control" placeholder="Limite Regulamentado">
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="valor_considerado" value="{{old('valor_considerado')}}"
                            class="form-control" placeholder="Valor Considerado">
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-md">
                        <textarea type="text" name="observacoes" value="{{old('observacoes')}}" class="form-control"
                            placeholder="Observações"></textarea>
                    </div>
                </div>
            </fieldset>
            <fieldset class="shadow-sm p-4">
                <legend>Medida Administrativa</legend>
                <div class="row p-2">
                    <div class="col-md-4">
                        <select id="medida1" name="medida1" value="{{old('medida1')}}" class="form-select">
                            <option value="{{$ait->medida1 ?? old('medida1')}}">{{$ait->medida1 ?? 'Medida Administrativa'}}</option>
                            <option value="REMOÇÃO">Remoção</option>
                            <option value="RECOLHIMENTO">Recolhimento</option>
                            <option value="RETENÇAO">Retenção</option>
                            <option value="TESTE DE ALCOOLEMIA">Teste de Alcoolemia</option>
                        </select>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <select id="medida2" name="medida2" value="{{old('medida2')}}" class="form-select">
                            <option value="{{$ait->medida2 ?? old('medida2')}}">{{$ait->medida2 ?? 'Medida Administrativa'}}</option>
                            <option value="CNH/PPD/ACC">CNH/PPD/ACC</option>
                            <option value="CRLV">CRLV</option>
                            <option value="CRV">CRV</option>
                            <option value="VEÍCULO">Veículo</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="ficha_vistoria" value="{{old('ficha_vistoria')}}"
                            class="form-control" placeholder="Ficha de Vistoria">
                    </div>
                </div>
            </fieldset>

            <fieldset class="shadow-sm p-4">
                <legend>Anexar Imagem</legend>
                <div class="row p-2">
                    <div class="col-md-2">
                        <input type="button" class="btn_img" value="Selecionar Arquivo">
                    </div>
                    <div class="col-md-5">
                        <input type="file" name="imagem" id="arquivo" class="arquivo">
                        <input type="text" name="file" id="file" class="file" placeholder=""
                            readonly="readonly">
                    </div>
                </div>
            </fieldset>

            <fieldset class="shadow-sm p-4">
                <div class="row p-2">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-lg">Finalizar</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>

@endsection
