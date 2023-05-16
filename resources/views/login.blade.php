<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
<footer>
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
</footer>

<main>
    <div class="container mt-3">
        <div>
            <div class="row align-items-center">
                <div class="col-md-6 col-12 ">
                    <img src="{{ asset('img/microscopio.jpg') }}" class="img-fluid" alt="microscopio" width="100%" height="100%">
                </div>

                <div class="col-md-6 col-12">
                    <form action="{{route('login')}}" method="post">
                        @csrf
                        @method("post")
                        <div class ="text-center">
                            <label style="font-weight: bold; font-size: 35px;">Login</label>
                        </div>
                        <div class="my-2 mx-auto" style="max-width: 300px;">
                            <label for="exampleInputEmail1" class="form-label">E-mail</label>
                            <input type="email" id="Email" class="form-control" placeholder="Seu email" name="email" autocomplete="username" autofocus>
                        </div>

                        <div class="my-2 mx-auto" style="max-width: 300px;">
                            <label for="exampleInputPassword1" class="form-label text-start">Senha</label>
                            <input type="password" id="Password" class="form-control" placeholder="Sua Senha" name="password"  autocomplete="current-password">
                        </div>

                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary px-4">Entrar</button>
                        </div>

                        <div class="mt-3 text-center">
                            <label>Novo por aqui?</label>
                            <a href="{{route('register')}}" style="color:#3c31d4;">Cadastre-se</a><br>
                            <label>Esqueceu a senha?</label>
                            <a href="#" style="color:#3c31d4;">Esqueci minha senha</a>
                        </div>
                    </form>
                </div>

                @if (session('success'))
                    <div class="alert alert-success mt-3">
                        {{ session('success') }}
                    </div>
                @endif

                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger text-center mt-3">
                            <span>{{ $error }}</span>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>
</html>
