<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <title>Itens</title>
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

            {{--Template gerenciar itens--}}
            <div class="dashboard-app">
                <div class="dashboard-content">
                    <div class="container">
                        <div class="card sm-2 p-2">
                            <h2 class="text-center mb-3 p-3" id="tabelacrud">Gerenciar itens</h2>
                            <form action="{{ route('itens.buscar') }}" method="get">
                                <div class="d-flex justify-content-end mb-3">
                                    <select class="form-select me-2" id="selectProjetos" name="id_projeto" required>
                                        <option value="">Selecione um projeto para gerenciar os itens</option>
                                        @foreach($projetos as $projeto)
                                            <option value="{{ $projeto->id }}" {{ isset($projetoSelecionado) && $projetoSelecionado->id == $projeto->id ? 'selected' : '' }}>
                                                {{ $projeto->titulo }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <button type="submit" id="colorb" class="btn btn-dark me-2">Buscar</button>
                                </div>
                            </form>

                            @if(session('success'))
                                <div id="mensagemSucesso" class="alert alert-success text-center my-2">
                                    <span>{{ session('success') }}</span>
                                </div>
                            @endif

                            @if(session('error'))
                                <div id="mensagemError" class="alert alert-danger text-center my-2">
                                    <span>{{ session('error') }}</span>
                                </div>
                            @endif

                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger text-center my-1 mensagemError">
                                        <span>{{ $error }}</span>
                                    </div>
                                @endforeach
                            @endif

                            <div class="d-flex justify-content-end">
                                <a id="colorb" href="#addEmployeeModal" class="btn btn-dark my-1 me-2" data-toggle="modal">
                                    <div class="d-flex align-items-center">
                                        <i class="material-icons me-1">&#xE147;</i>
                                        <span>Adicionar novo item</span>
                                    </div>
                                </a>
                            </div>
                            <table class="table table-striped table-bordered" id="projectTable">
                                <thead>
                                <tr class="text-center">
                                    <th scope="col">#</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Quantidade</th>
                                    <th scope="col">Descrição</th>
                                    <th scope="col">Ações</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(!empty($itens))
                                    @foreach($itens as $item)
                                        <tr class="text-center">
                                            <th scope="row">{{$loop->iteration}}</th>
                                            <td>{{$item->nome}}</td>
                                            <td>{{$item->quantidade}}</td>
                                            <td>{{$item->descricao}}</td>
                                            <td scope="col" class="text-center">
                                                <a href="#viewEmployeeModal" class="view" id="visualizar" data-toggle="modal" data-id="{{ $item->id }}">
                                                    <i class="material-icons" data-toggle="tooltip" title="Verificar dados">&#xE417;</i>
                                                </a>
                                                <a href="#editEmployeeModal" class="edit" id="editar" data-toggle="modal" data-id="{{ $item->id }}">
                                                    <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
                                                </a>
                                                <a href="#deleteEmployeeModal" class="delete" data-toggle="modal" data-id="{{ $item->id }}">
                                                    <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="5" class="text-center">Nenhum item disponível, selecione um projeto para fazer a busca.</td>
                                    </tr>
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            @include('components.modaisItens')
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        <script src="{{asset('js/crudItens.js')}}"></script>
    </body>
</html>
