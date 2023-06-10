<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <title>Editar Perfil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/crud.css')}}">
    <link rel="stylesheet" href="{{asset('css/datatable.css')}}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
<div class='dashboard'>
    {{--Dashbord--}}
    @include('components.dashboard');

    {{--Template Editar perfil--}}
    <div class="dashboard-app">
        <div class="dashboard-content">
            <div class="container">


                <main>
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="row mb-4 text-center border rounded" style="background-color: #edf2f7">
                                    <h2 class="mt-4">Editar perfil:</h2>
                                    <h4 class="my-2"> Se você quer alterar ou esqueceu sua senha <a href="{{route('editarSenha')}}"> clique aqui </a></h4>
                                </div>
                                <form action="{{route('editarPerfil')}}" method="post" class="needs-validation" novalidate>
                                    <!-- Mudar claro, a action-->
                                    @csrf
                                    <div class="row border rounded mb-4 " style="background-color: #edf2f7">
                                        <div class="col-md-6"> <!-- Campos a esquerda: -->
                                            <div class="my-4">
                                                <label for="nome" class="form-label">Nome:</label>
                                                <input type="text" class="form-control" id="nome" name="name" pattern="pattern="[A-Za-zÀ-ÿ\s]{1,300}" required>
                                                <div class="invalid-feedback">
                                                    O nome é obrigatório e deve conter no mínimo 1 letra e no máximo 300 letras!
                                                </div>
                                            </div>

                                            <div class="my-4">
                                                <label for="email" class="form-label">E-mail:</label>
                                                <input type="email" class="form-control" id="email" name="email" required>
                                                <div class="invalid-feedback">
                                                    Digite um e-mail válido.
                                                </div>
                                            </div>

                                            <div class="my-4">
                                                <label for="curriculoLattes" class="form-label">Currículo Lattes:</label>
                                                <input type="text" class="form-control" id="lattes" name="curriculoLattes">
                                            </div>

                                        </div>

                                        <div class="col-md-6"> <!-- Campos a direita agora: -->
                                            <div class="my-4">
                                                <label for="datadeNascimento" class="form-label">Data de Nascimento: </label>
                                                <input type="date" class="form-control" id="datanascimento" name="datadeNascimento">
                                            </div>

                                            <div class="my-4">
                                                <label for="celular" class="form-label">Celular:</label>
                                                <input type="tel" class="form-control" id="celular" name="telefone"pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}" >
                                                <script> $('#celular').mask('(00) 0000-0000');</script>

                                                <div class="invalid-feedback">
                                                    Digite um número de celular válido com DDD.
                                                </div>
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

                    <script src="{{ asset('js/validacao.js') }}" ></script>

                </main>

                </div>

            </div>
        </div>
    </div>



</div>

</body>
</html>