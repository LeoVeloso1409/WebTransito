<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top mt-2 mb-2 shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{url('/webtransito')}}"> <img src="{{asset('Imagens/logoSistema.png')}}" width="60"  alt="Início"></a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="btn nav-link active" data-bs-toggle="modal" data-bs-target="#modal" aria-current="page">Novo AIT</a>
                </li>
                <li class="nav-item">
                    <a class="btn nav-link" href="route('aits.meus.registros')}}">Meus Registros</a>
                </li>
            </ul>
            <ul class="col-lg navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-link"> </li>
            </ul>
            <ul>
                <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                    <ul class="navbar-nav">
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Administrador
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                          <li><a class="dropdown-item" href="route('register.user')}}">Cadastrar Usuário</a></li>
                          <li><a class="dropdown-item" href="route('pesquisar.user')}}">Pesquisar Usuários</a></li>
                          <li><a class="dropdown-item" href="route('aits.pesquisar')}}">Pesquisar Ait's</a></li>
                        </ul>
                      </li>
                    </ul>
                </div>
            </ul>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <span>
                    <div>
                        <form method="POST" action="">
                            @csrf
                            <li class="nav-item">
                                <a class="btn nav-link" :href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                {{ __('Sair') }}
                                </a>
                            </li>
                        </form>
                    </div>
                </span>
            </ul>
        </div>
    </div>
</nav>
