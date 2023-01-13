<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="description" content="Sistema Web de Auto de Infrações de Trânsito - AIT">
            <meta name="author" content="Leonardo Veloso Neves">
            <title>WebTrânsito - AIT</title>
            <!-- Bootstrap core CSS -->
            <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}" >
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

            <!-- Custom styles for this template -->
            <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
            <link rel="stylesheet" href="{{asset('bootstrap/js/bootstrap.min.js')}}">


            <link rel="shortcut icon" type="imagex/png" href="{{asset('Imagens/logoSistema.png')}}">

            <!-- Fonts -->
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
            <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

            <!-- Styles -->
            <link rel="stylesheet" href="{{ asset('css/app.css') }}">

            <!-- Scripts -->
            <script src="{{ asset('js/app.js') }}" defer></script>

            <!-- JavaScript Bundle with Popper -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        </head>

        <body>
            <div class="container-fluid" id="layout">
                <div class="container-fluid text-center bg-light p-4 position-static h-auto min-vh-100 flex-column d-flex">
                    <header class="text-center bg-info shadow-lg align-content-center p-auto d-block" id="header">
                        <h1 class="text-center"><b>WebTrânsito</b></h1>
                    </header>

                    @include('_includes.navbar')

                    <div class="container-fluid bg-light mt-2 mb-2" id="body">
                        <div class="container-fluid w-75 m-auto p-4 position-static h-auto d-md-inline-flex d-none">

                            @include('_includes.header')

                        </div>

                        <footer class="page-footer align-content-center mt-6" id="footer">
                            <div class="footer-copyright">
                                <div class="container text-center">
                                    <p class="font-sans text-secondary">Copyright &copy; 2023 by Leonardo Veloso Neves.<br>IFNMG - Pirapora/MG</p>
                                </div>
                            </div>
                        </footer>
                    </div>
                </div>
            </div>

            <!-- Modal Novo AIT -->
            <div class="modal fade" id="modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Atenção</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div>
                            <form method="POST" action="route('ait.store')}}">
                                @csrf

                                @php
                                    //$cod_ait = App\Http\Controllers\WebtransitoController::gerarCodAit();
                                @endphp

                                <input hidden type="text" name="user_id" value="{{ Auth::user()->id }}">
                                <input hidden type="text" name="cod_ait" value="01203046">
                                <input hidden type="text" name="orgao_autuador" value="{{ Auth::user()->orgao }}">
                                <input hidden type="text" name="matricula" value="{{ Auth::user()->matricula }}">
                                <input hidden type="text" name="nome" value={{ Auth::user()->nome }}>

                                <div class="modal-body">
                                    <p>Ao Iniciar uma autuação ela não poderá mais ser cancelada.</p>
                                    <br>
                                    <p>Deseja realmente continuar?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-primary">Confirmar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <script src="{{ asset('js/app.js') }}" type="text/js"></script>

            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        </body>
    </html>
