@extends('layout')

@section('content')
    <head>
        <title>Inicio || Proyecto ASATA</title>
    </head>
    <body class="d-flex flex-column h-100">
        <header class="bg-grey-dark d-flex flex-column flex-md-row align-items-center ps-3 pe-3 px-md-4 mb-3 border-bottom shadow-sm">
            <h1 class="h3 my-0 me-md-auto fw-normal mb-1 text-grey">El Llugarín</h1>
            <nav class="navbar navbar-expand-lg navbar-dark my-2 my-md-0 me-md-3">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0 text-grey-dark">
                        <li class="nav-item action ps-2 pe-2">
                            <a class="nav-link text-grey activa" href="/">Inicio</a>
                        </li>
                        <li class="nav-item dropdown action ps-2 pe-2">
                            <a class="nav-link dropdown-toggle text-grey" id="navbarDropdown" role="button" data-bs-toggle="dropdown" href="#">Catálogo</a>
                            <ul class="dropdown-menu bg-grey-dark">
                                <li><a class="dropdown-item action text-grey" href="/nuestras_casas">Nuestras Casas</a></li>
                                <li><a class="dropdown-item action text-grey" href="/servicios">Servicios</a></li>
                                <li><a class="dropdown-item action text-grey" href="/alquileres">Alquileres</a></li>
                            </ul>
                        <li class="nav-item action ps-2 pe-2">
                            <a class="nav-link text-grey" href="/galeria">Galería</a>
                        </li>
                        <li class="nav-item action ps-2 pe-2">
                            <a class="nav-link text-grey" href="/noticias">Noticias</a></li>
                        </li>
                        <li class="nav-item action ps-2 pe-2">
                            <a class="nav-link text-grey" href="/faqs">FAQS</a>
                        </li>
                        <li class="nav-item action ps-2 pe-2">
                            <a class="nav-link text-grey" href="/contacto">Contacto</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <main class="container-sm mb-4">
            <h2 class="text-center pb-5 mb-5 mt-5">Bienvenidos a El Llugarin</h2>
            <p class="lead mb-5">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas earum, dolorum eligendi porro mollitia cupiditate nesciunt aperiam maiores reiciendis et dicta commodi laborum quasi a in, consequuntur fuga ex. Repudiandae accusamus culpa a nihil porro vero, odit deserunt et illum quos nostrum reprehenderit veritatis blanditiis laudantium aut ratione voluptatum enim alias optio sequi nobis similique iste unde dolores? Veniam, ad tempore cumque explicabo ex aperiam harum eveniet, architecto placeat corporis sequi totam sunt? Asperiores sint ex qui nobis ab suscipit molestias natus nam ad doloremque fuga laboriosam accusamus cumque consectetur alias magnam maxime nisi, sapiente quisquam rem, soluta obcaecati! Quo!
            </p>
            <div id="carouselExampleIndicators" class="carousel slide w-75 m-auto" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./img/galeria/casas/casaLagoGaleria.jpg" class="d-block w-100" alt="Casa Asgard">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/galeria/casas/casaMontañaGaleria.jpg" class="d-block w-100" alt="Casa Midgard">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/galeria/casas/casaMontañaLagoGaleria.jpg" class="d-block w-100" alt="Casa Valhalla">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/galeria/casas/casaPraderaGaleria.jpg" class="d-block w-100" alt="Casa Wakanda">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/galeria/casas/granjaGaleria.jpg" class="d-block w-100" alt="Casa Jötunheim">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </main>
@stop
