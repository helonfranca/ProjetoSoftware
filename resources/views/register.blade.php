<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
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
                            <a class="nav-link" href="#">Ajuda</a>
                        </li>
                        <li class="nav-item mx-5">
                            <a class="nav-link" href="{{route("login")}}">
                                <i class="fas fa-user" style="margin-right: 5px;"></i>
                                Entre ou cadastre-se
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="container">
        <div class="row">
            <div class="col>
                <form action="{{route('registrar')}}" method="post">
                    @csrf
                    <div class="mt-4 text-center">
                        <h2>Registrar-se:</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="my-4">
                                <label for="nome" class="form-label">Nome:</label>
                                <input type="text" class="form-control" id="nome" aria-describedby="emailHelp" name="name">
                            </div>

                            <div class="my-4">
                                <label for="email" class="form-label">E-mail:</label>
                                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                            </div>

                            <div class="my-4">
                                <label for="email_verify" class="form-label">Repetir E-mail:</label>
                                <input type="email" class="form-control" id="email" name="email_verify" aria-describedby="emailHelp">
                            </div>

                            <div class="my-4">
                                <label for="exampleInputPassword1" class="form-label">Senha:</label>
                                <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="my-4">
                                <label for="datanascimento" class="form-label">Data de Nascimento: </label>
                                <input type="date" class="form-control" id="datanascimento" name="datadeNascimento">
                            </div>

                            <div class="my-4">
                                <label for="celular" class="form-label">Celular:</label>
                                <input type="tel" class="form-control" id="celular" name="telefone">
                            </div>

                            <div class="my-4">
                                <label for="lattes" class="form-label">Currículo Lattes:</label>
                                <input type="text" class="form-control" id="lattes" name="curriculoLattes">
                            </div>

                            <div class="my-4">
                                <label for="instituicao" class="form-label">Instituição:</label>
                                <input type="text" class="form-control" id="instituicao" name="instituicao">
                            </div>
                        </div>

                        <div class="my-4 text-center">
                            <label for="funcao" class="form-label">Função:</label>
                            <input type="text" class="form-control" id="funcao" name="funcao">
                        </div>
                    </div>

                    <div class="my-4 text-center">
                        <label class="form-label">Sexo:  </label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sexo" id="feminino" value="Feminino">
                            <label class="form-check-label" for="feminino">Feminino</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sexo" id="masculino" value="Masculino"
                                   checked>
                            <label class="form-check-label" for="masculino">Masculino</label>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
