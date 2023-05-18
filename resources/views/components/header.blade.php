<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg " style="background-color: #ffffff;">
            <div class="container-fluid">
                <a class="navbar-brand me-2" href="{{route("welcome")}}"> <img src="{{ asset('img/laborganizer.png') }}" alt="logo" width="250" height="200"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse  justify-content-center" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item mx-5">
                            <a class="nav-link active" aria-current="page" href="{{route("welcome")}}">Página Inicial</a>
                        </li>
                        <li class="nav-item mx-5">
                            <a class="nav-link active" href="#">Ajuda</a>
                        </li>
                        <li class="nav-item mx-5">
                            <a class="nav-link active" href="{{route("login")}}">
                                <i class="fas fa-user " style="margin-right: 5px;"></i>
                                Entre ou cadastre-se
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
