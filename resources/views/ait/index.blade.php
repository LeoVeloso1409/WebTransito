@extends('layout')

@section('content')
    <div class="container-fluid m-auto p-4 position-static h-auto d-md-inline-flex shadow-sm" id="table">
        {{$msg ?? ''}}

        <table class="table table-primary table-striped caption-top">
            <caption>{{(empty($aitsTrue)) ? 'Lista de Autuações Pendentes' : 'Lista de Autuaçoes Finalizadas'}}</caption>
            <thead class="table-dark">
                <tr>
                    <th scope="col">Código AIT</th>
                    <th scope="col">Código Infração</th>
                    <th scope="col">Placa</th>
                    <th scope="col">Data de Criação</th>
                    <th scope="col">{{(empty($aitsTrue)) ? 'Expira Em' : 'Encerrada Em'}}</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @if (empty($aitsTrue))
                    @foreach ($aits as $ait)
                        <tr>
                            <th scope="row">{{$ait->cod_ait ?? '-'}}</th>
                            <td>{{$ait->codigo_infracao ?? '-'}}</td>
                            <td>{{$ait->placa ?? '-'}}</td>
                            <td>{{$ait->created_at ?? '-'}}</td>
                            <td>"Em Breve"</td>
                            <td>
                                <a href="{{route('ait.edit', $ait->id)}}"> <button class="btn btn-sm btn-secondary">Iniciar</button></a>
                            </td>
                        </tr>
                    @endforeach

                @else
                    @foreach ($aitsTrue as $ait)
                        <tr>
                            <th scope="row">{{$ait->cod_ait ?? '-'}}</th>
                            <td>{{$ait->codigo_infracao ?? '-'}}</td>
                            <td>{{$ait->placa ?? '-'}}</td>
                            <td>{{$ait->created_at ?? '-'}}</td>
                            <td>{{$ait->updated_at ?? ''}}</td>
                            <td>
                                <a href="route('ait.show', $ait->id)"> <button class="btn btn-sm btn-secondary">Visualizar</button></a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
    @if (empty($aitsTrue))
        <div class="container-fluid w-100" >
            <div class="row p-2">
                <div class="col-md-2">
                    {{$aits->appends($request)->links()}}
                </div>
                <div class="col-md-6"></div>
                <div class="col-md-4">
                    <caption>Exibindo {{$aits->count()}} registro de {{$aits->total()}}</caption>
                </div>
            </div>
        </div>
    @else
        <div class="container-fluid w-100" >
            <div class="row p-2">
                <div class="col-md-2">
                    {{$aitsTrue->appends($request)->links()}}
                </div>
                <div class="col-md-6"></div>
                <div class="col-md-4">
                    <caption>Exibindo {{$aitsTrue->count()}} registro de {{$aitsTrue->total()}}</caption>
                </div>
            </div>
    </div>
    @endif
@endsection


