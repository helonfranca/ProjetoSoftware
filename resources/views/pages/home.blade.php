<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/crud.css')}}">
    <link rel="stylesheet" href="{{asset('css/datatable.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
    <div class="dashboard">
        @include('components.dashboard')
        <div class="dashboard-app">
            <div class="container">
                <div class="container text-center">
                    <h1>Projetos</h1>
                    <h4 class="my-2 mb-2">Confira todos os projetos que estão rolando no laboratório!</h4>
                </div>

                <div class="container-fluid my-5">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="carousel slide" data-ride="carousel" id="inam">
                                <div class="carousel-inner">
                                    <div class="carousel-item active" style="background-color: white">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-sm-12 col-lg-4">
                                                    <div class="card" style="width: 300px; margin: auto;">
                                                        <img src="{{ asset('img/pessoaMicroscopio.jpg') }}" class="card-img-top">
                                                        <div class="card-body">
                                                            <h4 class="card-title">Why you should use skin masks?</h4>
                                                            <p class="card-text">Skin masks help us to make our skin fresh and also protect it from the harmful rays of the sun.</p>
                                                            <button type="button" class="btn btn-warning">Read More</button>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-12 col-lg-4">
                                                    <div class="card" style="width: 300px;">
                                                        <img src="{{ asset('img/pessoaMicroscopio.jpg') }}" class="card-img-top">
                                                        <div class="card-body">
                                                            <h4 class="card-title">Why you should use skin masks?</h4>
                                                            <p class="card-text">Skin masks help us to make our skin fresh and also protect it from the harmful rays of the sun.</p>
                                                            <button type="button" class="btn btn-warning">Read More</button>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-12 col-lg-4">
                                                    <div class="card" style="width: 300px;">
                                                        <img src="{{ asset('img/pessoaMicroscopio.jpg') }}" class="card-img-top">
                                                        <div class="card-body">
                                                            <h4 class="card-title">Why you should use skin masks?</h4>
                                                            <p class="card-text">Skin masks help us to make our skin fresh and also protect it from the harmful rays of the sun.</p>
                                                            <button type="button" class="btn btn-warning">Read More</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <a class="carousel-control-prev" href="#inam" role="button" data-slide="prev" >
                                    <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: black"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#inam" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true" style="background-color: black"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="my-custom-margin border"></div>

                <div class="container my-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="img">
                                <img src="{{ asset('img/pessoaMicroscopio.jpg') }}" alt="logo" width="250" height="200">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="d-flex flex-column h-100 justify-content-between">
                                <div class="mt-4">
                                    <h5>Agenda de equipamentos</h5>
                                    <div class="mt-3">
                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore m ullamco laboris nis quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary">Acesse aqui</button>
                        </div>
                    </div>
                </div>

                <div class="my-custom-margin border" ></div>

                <div class="container my-5">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="d-flex flex-column h-100 justify-content-between">
                                <div class="mt-4">
                                    <h5>Agenda de equipamentos</h5>
                                    <div class="mt-3">
                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore m ullamco laboris nis quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="img">
                                <img src="{{ asset('img/pessoaMicroscopio.jpg') }}" alt="logo" width="250" height="200">
                            </div>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary">Acesse aqui</button>
                        </div>
                    </div>
                </div>

                <div class="my-custom-margin border" ></div>

                <div class="container my-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="img">
                                <img src="{{ asset('img/pessoaMicroscopio.jpg') }}" alt="logo" width="250" height="200">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="d-flex flex-column h-100 justify-content-between">
                                <div class="mt-4">
                                    <h5>Agenda de equipamentos</h5>
                                    <div class="mt-3">
                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore m ullamco laboris nis quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary">Acesse aqui</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </body>
</html>
