<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/crud.css')}}">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link rel="stylesheet" href="{{asset('css/datatable.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

</head>
<body>
    <div class="dashboard">
        {{--Dashbord--}}
        @include('components.dashboard')

        {{--Main--}}
        <div class="dashboard-app">
            <div class="container">
                <div class="container text-center">
                    <h1>Projetos</h1>
                    <h4 class="my-3 mb-2">Confira todos os projetos que estão rolando no laboratório!</h4>
                </div>

                <div class="container-fluid my-5" style="max-height: 340px; overflow-y: scroll;">
                    <div class="row justify-content-center">
                        @if(count($projetos) == 0)
                            <div class="text-center">
                                <h3>Projetos em breve!</h3>
                            </div>
                        @else
                            @foreach($projetos as $projeto)
                                <div class="col-md-4 my-2">
                                    <div class="card view-projeto border-0">
                                        <div class="card-body card-complete">
                                            <h4 class="card-title text-white">{{$projeto->titulo}}</h4>
                                            <div class="overflow-auto text">
                                                <p class="card-text text-white">{{$projeto->descricao}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center my-3">
                                        <button type="button" class="button" id="visualizar" data-id="{{$projeto->id}}" data-toggle="modal" data-target="#myModal">SAIBA MAIS</button>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>

                <!-- MODAL VIZUALIZAR PROJETO -->
                <div class="modal" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Visualizando dados do Projeto</h4>
                                <button  class="btn-close"  type="button" data-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Título do Projeto: <span id="modal-titulo"></span></p>
                                <p>Descrição: <span id="modal-descricao"></span></p>
                                <p>Data Inicial: <span id="modal-data-inicial"></span></p>
                                <p>Data Final: <span id="modal-data-final"></span></p>
                                <p>Status: <span id="modal-status"></span></p>
                                <p>Participantes: <span id="modal-participantes"></span></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="my-custom-margin border"></div>

                <div class="container my-5">
                    <div class="row">
                        <div class="col-md-4 d-flex justify-content-center">
                            <div class="img-fluid">
                                <img src="{{ asset('img/tubo-de-ensaio-.jpg') }}" alt="logo" width="250" height="200">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="d-flex flex-column h-100 justify-content-between">
                                <div class="mt-4">
                                    <h4>Agenda de equipamentos</h4>
                                    <div class="mt-3 text-inform">
                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore m ullamco laboris nis quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button class="button my-3">Acesse aqui</button>
                        </div>
                    </div>
                </div>

                <div class="my-custom-margin border" ></div>

                <div class="container my-5">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="d-flex flex-column h-100 justify-content-between">
                                <div class="mt-4">
                                    <h4>Estoque</h4>
                                    <div class="mt-3 text-inform">
                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore m ullamco laboris nis quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex justify-content-center">
                            <div class="img-fluid">
                                <img src="{{ asset('img/itens-lab.jpg') }}" alt="logo" width="250" height="200">
                            </div>
                        </div>
                        <div class="text-center">
                            <button class="button my-3">Acesse aqui</button>
                        </div>
                    </div>
                </div>

                <div class="my-custom-margin border" ></div>

                <div class="container my-5">
                    <div class="row">
                        <div class="col-md-4 d-flex justify-content-center">
                            <div class="img-fluid">
                                <img src="{{ asset('img/resultados.jpg') }}" alt="logo" width="250" height="200">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="d-flex flex-column h-100 justify-content-between">
                                <div class="mt-4">
                                    <h4>Resultados</h4>
                                    <div class="mt-3 text-inform">
                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore m ullamco laboris nis quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button class="button my-3">Acesse aqui</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.querySelectorAll('#visualizar').forEach(function(button) {
            button.addEventListener('click', function() {
                const idProj = this.getAttribute('data-id');

                document.getElementById('modal-titulo').textContent = 'Carregando...';
                document.getElementById('modal-data-inicial').textContent = 'Carregando...';
                document.getElementById('modal-data-final').textContent = 'Carregando...';
                document.getElementById('modal-descricao').textContent = 'Carregando...';
                document.getElementById('modal-status').textContent = 'Carregando...';

                // Fazer uma requisição AJAX para atualizar os dados do projeto
                setTimeout(function() {
                    // Fazer uma requisição AJAX para atualizar os dados do projeto
                    fetch('/projetos/visualizar/' + idProj)
                        .then((response) => response.json())
                        .then((data) => data.projeto)
                        .then((dados) => {
                            document.getElementById('modal-titulo').textContent = dados.titulo;
                            document.getElementById('modal-data-inicial').textContent = new Date(dados.data_inicial).toLocaleDateString('pt-BR', { day: '2-digit', month: '2-digit', year: 'numeric' });
                            document.getElementById('modal-data-final').textContent = new Date(dados.data_final).toLocaleDateString('pt-BR', { day: '2-digit', month: '2-digit', year: 'numeric' });
                            document.getElementById('modal-descricao').textContent = dados.descricao;
                            document.getElementById('modal-status').textContent = dados.status;
                            document.getElementById('modal-participantes').textContent = dados.participantes;

                        })
                        .catch(function(error) {
                            console.log(error);
                        });
                },500);
            });
        });
    </script>

   </body>
</html>


