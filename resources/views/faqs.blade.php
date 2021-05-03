@extends('layout')

@section('content')
    <head>
        <script defer src="scripts/faqs.js"></script>
        <title>FAQs || Proyecto ASATA</title>
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
                        <a class="nav-link text-grey activa" href="/faqs">FAQS</a>
                    </li>
                    <li class="nav-item action ps-2 pe-2">
                        <a class="nav-link text-grey" href="/contacto">Contacto</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <h2 class="text-center pb-5 mt-5 mb-5">FAQ</h2>
        <section class="container-md">
            <div class="questions__accordions">
                <section class="question-answer__accordion">
                    <article class="card-body question">
                        <h3 class="card-title h5">Dónde estamos</h3>
                        <img class="imgfaq" src="img/icon-arrow-down.svg" />
                    </article>
                    <article class="p-3 answer">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Expedita modi voluptatibus eum id nemo eligendi!
                        </p>
                    </article>
                </section>
            </div>
            <div class="questions__accordions">
                <section class="question-answer__accordion">
                    <article class="card-body question">
                        <h3 class="card-title h5">Como llegar</h3>
                        <img class="imgfaq" src="img/icon-arrow-down.svg" />
                    </article>
                    <article class="p-3 answer">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Expedita modi voluptatibus eum id nemo eligendi!
                        </p>
                    </article>
                </section>
            </div>
            <div class="questions__accordions">
                <section class="question-answer__accordion">
                    <article class="card-body question">
                        <h3 class="card-title h5">Check in</h3>
                        <img class="imgfaq" src="img/icon-arrow-down.svg" />
                    </article>
                    <article class="p-3 answer">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Expedita modi voluptatibus eum id nemo eligendi!
                        </p>
                    </article>
                </section>
            </div>
            <div class="questions__accordions">
                <section class="question-answer__accordion">
                    <article class="card-body question">
                        <h3 class="card-title h5">Check out</h3>
                        <img class="imgfaq" src="img/icon-arrow-down.svg" />
                    </article>
                    <article class="p-3 answer">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Expedita modi voluptatibus eum id nemo eligendi!
                        </p>
                    </article>
                </section>
            </div>
            <div class="questions__accordions">
                <section class="question-answer__accordion">
                    <article class="card-body question">
                        <h3 class="card-title h5">Facturacíon</h3>
                        <img class="imgfaq" src="img/icon-arrow-down.svg" />
                    </article>
                    <article class="p-3 answer">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Expedita modi voluptatibus eum id nemo eligendi!
                        </p>
                    </article>
                </section>
            </div>
            <div class="questions__accordions">
                <section class="question-answer__accordion">
                    <article class="card-body question">
                        <h3 class="card-title h5">Métodos de pago</h3>
                        <img class="imgfaq" src="img/icon-arrow-down.svg" />
                    </article>
                    <article class="p-3 answer">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Expedita modi voluptatibus eum id nemo eligendi!
                        </p>
                    </article>
                </section>
            </div>
        </section>
    </main>
@stop
