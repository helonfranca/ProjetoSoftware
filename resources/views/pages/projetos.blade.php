<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <title>Meus Projetos</title>
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

        {{--Template gerenciar projetos--}}
        <div class="dashboard-app">
            <div class="dashboard-content ms-5">
                <div class="container">
                    <div class="card sm-2 p-2">
                        <h2 class="text-center mb-3 p-3" id="tabelacrud">Gerenciar projetos</h2>
                        <div class="d-flex justify-content-end">
                            <a id="colorb" href="#addEmployeeModal" class="btn btn-dark my-1 me-2" data-toggle="modal">
                                <div class="d-flex align-items-center">
                                    <i class="material-icons me-1">&#xE147;</i>
                                    <span>Adicionar novo projeto</span>
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
                                <tr class="text-center">
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
    <script>
        $(document).ready(function() {
            $('#projectTable').DataTable({
            language: {
                url: '{{asset('js/pt-BR.json')}}'
            },
            lengthMenu: [5,10],
            paging: true, // Ativar paginação
            searching: true, // Ativar barra de pesquisa
            // Outras opções personalizadas, se necessário
            });
        });
         $(document).ready(function() {
            // Ativar tooltip
            $('[data-toggle="tooltip"]').tooltip();

            const mobileScreen = window.matchMedia("(max-width: 990px)");

            $(".dashboard-nav-dropdown-toggle").click(function() {
                $(this).closest(".dashboard-nav-dropdown")
                    .toggleClass("show")
                    .find(".dashboard-nav-dropdown")
                    .removeClass("show");
                $(this).parent()
                    .siblings()
                    .removeClass("show");
            });

            $(".menu-toggle").click(function() {
                if (mobileScreen.matches) {
                    $(".dashboard-nav").toggleClass("mobile-show");
                } else {
                    $(".dashboard").toggleClass("dashboard-compact");
                }
            });
        });
    </script>
</body>
</html>
