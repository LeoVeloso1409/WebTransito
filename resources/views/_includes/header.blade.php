<div class="container-fluid w-100 m-auto p-4 position-static h-auto shadow-lg" id="home">
    <div class="container-fluid p-4 shadow-sm">
        <div class="row align-items-center">
            <div class="col-md-2">
                <img src="{{ asset('Imagens/logoSistema.png') }}" alt="Responsive image" width="200" height="150"
                    class="border border-dark d-md-inline-flex">
            </div>

            <div class="col-md-8 offset-md-1 align-content-center">
                <div class="row align-content-center mt-4">
                    <div class="col">
                        <h4>Auto de Infrações de Trânsito - AIT</h4>
                    </div>
                </div>
                <div class="row offset-md-1 align-content-center mt-4">
                    <div class="col-md-4">
                        <input disabled type="text" class="form-control" placeholder="{{ Auth::user()->matricula }}">
                    </div>

                    <div class="col-md-7">
                        <input disabled type="text" class="form-control" placeholder="{{ Auth::user()->nome }}">
                    </div>
                </div>
            </div>
        </div>
    </div>

    @yield('content')

</div>
