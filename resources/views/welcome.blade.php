<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LabOrganizer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
          integrity="sha512" crossorigin="anonymous" />
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
        <div class="row" style="background-color: #f1f1f1;">
            <div class="col-md-6 col-12">
                <div class="container p-5">
                    <h1>Vamos organizar<br>
                        seus projetos!</h1>

                    <div class="mt-4">
                            <span>Lorem ipsum dolor sit amet,<br>
                                consectetur adipiscing elit, sed do <br>
                                eiusmod tempor incididunt ut.</span>
                    </div>

                    <div class="mt-4">
                        <a href="{{route("login")}}">
                            <button type="button" class="btn btn-outline-dark">Comece aqui</button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-12 ">
                <img src="{{ asset('img/pessoaMicroscopio.jpg') }}"  alt="microscopio" width="100%" height="100%">
            </div>
        </div>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>
</html>
