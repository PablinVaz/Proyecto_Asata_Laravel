@extends('layout')

@section('content')
    <head>
        <title>Servicios || Proyecto ASATA</title>
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
                        <a class="nav-link text-grey" href="/">Inicio</a>
                    </li>
                    <li class="nav-item dropdown action ps-2 pe-2">
                        <a class="nav-link dropdown-toggle text-grey activa" id="navbarDropdown" role="button" data-bs-toggle="dropdown" href="#">Catálogo</a>
                        <ul class="dropdown-menu bg-grey-dark">
                            <li><a class="dropdown-item action text-grey" href="/nuestras_casas">Nuestras Casas</a></li>
                            <li><a class="dropdown-item action text-grey activa" href="/servicios">Servicios</a></li>
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
    <main class="container-sm">
        <h2 class="text-center pb-5 mb-5 mt-5">Servicios</h2>
        <section class="row mt-5 ">
            <article class="col-lg-4 text-center mb-5">
                <figure>
                    <img class="imgMascotas rounded-circle img-thumbnail" src="./img/galeria/servicios/PerroGaleria.jpg" alt="Cara de perro">
                </figure>
                <h3>Aceptamos mascotas</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum, quibusdam.</p>
            </article>
            <article class="col-lg-4 text-center mb-5">
                <figure>
                    <img class="imgConectividad rounded-circle img-thumbnail" src="./img/galeria/servicios/ConectividadGaleria.jpg" alt="Simbolo Wifi">
                </figure>
                <h3>Conectividad</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum, quibusdam.</p>
            </article>
            <article class="col-lg-4 text-center mb-5">
                <figure>
                    <img class="imgBuffet rounded-circle img-thumbnail" src="img/galeria/servicios/BuffetGaleria.jpg" alt="Buffet Libre">
                </figure>
                <h3>Buffet Libre</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum, quibusdam.</p>
            </article>
        </section>
        <section class="row">
            <article class="col-lg-4 text-center mb-5">
                <figure>
                    <img class="imgPiscina rounded-circle img-thumbnail" src="./img/galeria/servicios/piscinaServicios.jpg" alt="Escalera de piscina">
                </figure>
                <h3>Piscina</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum, quibusdam.</p>
            </article>
            <article class="col-lg-4 text-center mb-5">
                <figure>
                    <img class="imgFumar rounded-circle img-thumbnail" src="./img/galeria/servicios/prohibidoFumar.jpg" alt="Prohibido fumar">
                </figure>
                <h3>Prohibido Fumar</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum, quibusdam.</p>
            </article>
            <article class="col-lg-4 text-center mb-5">
                <figure>
                    <img class="imgAlquiler rounded-circle img-thumbnail" src="img/galeria/alquiler/quadsGaleria.jpg" alt="Quad">
                </figure>
                <h3>Alquiler</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum, quibusdam.</p>
            </article>
        </section>

    </main>
@stop
