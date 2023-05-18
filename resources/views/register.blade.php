<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Cadastro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
          integrity="sha512" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    @include('components.header')

<main>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="mb-4 text-center border rounded">
                    <h2 class="my-4">Criar nova conta:</h2>
                    <h4 class="my-4">Já tem conta? Faça aqui seu login</h4>
                </div>
                <form action="{{route('registrar')}}" method="post">
                    @csrf
                    <div class="row border rounded mb-4">
                        <div class="col-md-6">
                            <div class="my-4">
                                <label for="nome" class="form-label">Nome:</label>
                                <input type="text" class="form-control" id="nome" name="name">
                            </div>

                            <div class="my-4">
                                <label for="email" class="form-label">E-mail:</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>

                            <div class="my-4">
                                <label for="password" class="form-label">Senha:</label>
                                <input type="password" class="form-control" name="password">
                            </div>

                            <div class="my-4">
                                <label for="confirm_password" class="form-label">Repetir Senha:</label>
                                <input type="password" class="form-control" name="confirm_password">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="my-4">
                                <label for="datadeNascimento" class="form-label">Data de Nascimento: </label>
                                <input type="date" class="form-control" id="datanascimento" name="datadeNascimento">
                            </div>

                            <div class="my-4">
                                <label for="telefone" class="form-label">Telefone:</label>
                                <input type="tel" class="form-control" id="celular" name="telefone">
                            </div>

                            <div class="my-4">
                                <label for="curriculoLattes" class="form-label">Currículo Lattes:</label>
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

                        <div class="my-4 text-center">
                            <label class="form-label">Sexo:  </label>
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="sexo" id="Feminino" value="Feminino">
                                <label class="form-check-label" for="feminino">Feminino</label>
                            </div>
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="sexo" id="Masculino" value="Masculino"
                                       checked>
                                <label class="form-check-label" for="masculino">Masculino</label>
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary mb-4">Enviar</button>
                        </div>
                    </div>
                </form>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
            crossorigin="anonymous"></script>
</main>
</body>
</html>
