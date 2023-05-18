<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/crud.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
    <body>
    <div class='dashboard'>
        <div class="dashboard-nav">
            <header>
                <a href="{{route('welcome')}}" class="brand-logo">
                    <img id="logo" src="{{asset('img/logo.png')}}" width="240" height="200">
                </a>
            </header>

            <nav class="dashboard-nav-list">
                <a href="#" class="dashboard-nav-item">
                    <i class="fas fa-home"></i>
                        Página Inicial
                </a>

                <a href="#" class="dashboard-nav-item">
                    <i class="fas fa-tachometer-alt"></i>
                        Agenda de equipamentos
                </a>

                <a href="#" class="dashboard-nav-item">
                    <i class="fas fa-file-upload"></i>
                        Estoque
                </a>

                <a href="#" class="dashboard-nav-item">
                    <i class="fas fa-file-upload"></i>
                        Gerenciar projetos
                </a>

                <a href="#" class="dashboard-nav-item">
                    <i class="fas fa-file-upload"></i>
                        Gerenciar usuários
                </a>

                <div class="nav-item-divider"></div>

                <a href="#" class="dashboard-nav-item">
                    <i class="fas fa-sign-out-alt"></i>
                        Logout
                </a>
            </nav>
        </div>

        {{--Template gerenciar projetos--}}
        <div class="dashboard-app">
            <div class="dashboard-content ms-5">
                <div class="container">
                    <div class="card sm-2">
                        <table class="table table-striped">
                            <h2 class="text-center mb-3 p-3" id="tabelacrud">Gerenciar projetos</h2>
                            <div class="d-flex justify-content-end">
                                <a id="colorb" href="#addEmployeeModal" class="btn btn-dark my-1 me-2" data-toggle="modal">
                                    <div class="d-flex align-items-center">
                                        <i class="material-icons me-1">&#xE147;</i>
                                        <span>Adicionar novo projeto</span>
                                    </div>
                                </a>
                            </div>

                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Título</th>
                                    <th scope="col">Data inicial</th>
                                    <th scope="col">Data final</th>
                                    <th scope="col">Status</th>
                                    <th scope="col" class="text-center">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Imuno</td>
                                    <td>99/99/99</td>
                                    <td>99/99/99</td>
                                    <td>Finalizado</td>
                                    <td scope="col" class="text-center">
                                        <a href="#viewEmployeeModal" class="view" data-toggle="modal">
                                            <i class="material-icons" data-toggle="tooltip" title="Verificar dados">&#xE417;</i>
                                        </a>
                                        <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                                            <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
                                        </a>
                                        <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
                                            <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Biologia</td>
                                    <td>99/99/99</td>
                                    <td>99/99/99</td>
                                    <td>Em andamento</td>
                                    <td scope="col" class="text-center">
                                        <a href="#viewEmployeeModal" class="view" data-toggle="modal">
                                            <i class="material-icons" data-toggle="tooltip" title="Verificar dados">&#xE417;</i>
                                        </a>
                                        <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                                            <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
                                        </a>
                                        <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
                                            <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Bioquímica</td>
                                    <td>99/99/99</td>
                                    <td>99/99/99</td>
                                    <td>Em andamento</td>
                                    <td scope="col" class="text-center">
                                        <a href="#viewEmployeeModal" class="view" data-toggle="modal">
                                            <i class="material-icons" data-toggle="tooltip" title="Verificar dados">&#xE417;</i>
                                        </a>
                                        <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                                            <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
                                        </a>
                                        <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
                                            <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    <!-- Adicionar Modal HTML -->
    <div id="addEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">Adicionar novo projeto</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Título</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Data inicial</label>
                            <input type="date" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Data final</label>
                            <input type="date" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Descrição</label>
                            <textarea class="form-control" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-success" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Edit Modal HTML -->
    <div id="editEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">Editar projeto</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Título</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Data inicial</label>
                            <input type="date" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Data final</label>
                            <input type="date" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Descrição</label>
                            <textarea class="form-control" required></textarea>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Delete Modal HTML -->
    <div id="deleteEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">Deletar Projeto</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Tem certeza que deseja deletar o projeto?</p>
                        <p class="text-warning"><small>Esta ação não poderá ser desfeita.</small></p>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- View Modal HTML -->
    <div id="viewEmployeeModal" class="modal fade">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">Verificar Dados</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <table class="table  table-striped">

                            <tbody>

                            <tr>
                                <td>#</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>Título</td>
                                <td>Imunologia</td>
                            </tr>
                            <tr>
                                <td>Data Inicial</td>
                                <td>10/02/2019</td>
                            </tr>
                            <tr>
                                <td>Data Final</td>
                                <td>20/05/2022</td>
                            </tr>
                            <tr>
                                <td>Participantes</td>
                                <td>Pablo; Helon; Vanessa; Tiago</td>



                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>Em andamento</td>
                            </tr>


                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-success" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            // Activate tooltip
            $('[data-toggle="tooltip"]').tooltip();
        });
        const mobileScreen = window.matchMedia("(max-width: 990px )");
        $(document).ready(function () {
            $(".dashboard-nav-dropdown-toggle").click(function () {
                $(this).closest(".dashboard-nav-dropdown")
                    .toggleClass("show")
                    .find(".dashboard-nav-dropdown")
                    .removeClass("show");
                $(this).parent()
                    .siblings()
                    .removeClass("show");
            });
            $(".menu-toggle").click(function () {
                if (mobileScreen.matches) {
                    $(".dashboard-nav").toggleClass("mobile-show");
                } else {
                    $(".dashboard").toggleClass("dashboard-compact");
                }
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>
