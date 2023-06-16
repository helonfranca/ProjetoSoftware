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

                    <!-- Adicionar campo de seleção visual: SELECT -->
                    <div class="d-flex justify-content-end mb-3">
                        <select class="form-select" id="selectProjetos">
                            <option value="">Todos os projetos</option>
                            <option value="concluidos">Projeto 1</option>
                            <option value="pendentes">Projeto 2</option>
                            <option value="pendentes">Projeto 3</option>
                        </select>
                    </div>
                    <!-- Fim do campo de seleção visual/SELECT -->

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
                            <th scope="col">Título</th>
                            <th scope="col">Data inicial</th>
                            <th scope="col">Data final</th>
                            <th scope="col">Status</th>
                            <th scope="col">Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        <!-- AQUI FICA NOSSO PADRÃO DE CÓDIGO QUE PUXAMOS DO BANCO: VER "PROJETOS.BLADE.PHP", E BASER O BACK END NELE: MEXER DPS -->
                        /* @foreach($itens as $projeto)*/ <!-- Variável $itens que definimos lá no nosso controle, e passamos por lá -->
                            <tr class="text-center">
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $projeto->titulo}}</td>
                                <td>{{ date('d/m/Y', strtotime($projeto->data_inicial))}}</td>
                                <td>
                                    @if ($projeto->data_final)
                                        {{ date('d/m/Y', strtotime($projeto->data_final)) }}
                                    @else
                                        <p>Não definida</p>
                                    @endif
                                </td>
                                <td>{{ $projeto->status }}</td>
                                <td scope="col" class="text-center">
                                    <a href="#viewEmployeeModal" class="view" id="visualizar" data-toggle="modal"  data-id="{{ $projeto->id }}">
                                        <i class="material-icons" data-toggle="tooltip" title="Verificar dados">&#xE417;</i>
                                    </a>
                                    <a href="#editEmployeeModal" class="edit" id="editar" data-toggle="modal" data-id="{{ $projeto->id }}">
                                        <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
                                    </a>
                                    <a href="#deleteEmployeeModal" class="delete" data-toggle="modal" data-id="{{ $projeto->id }}">
                                        <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        <!-- AQUI FICAO FIM DO BACK END QUE VEREMOS DEPOIS OBVIAMENTE KK -->

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @include('components.modais')

</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="{{asset('js/crudProjeto.js')}}"></script>
</body>
</html>
