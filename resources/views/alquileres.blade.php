@extends('layout')

@section('content')
    <head>
        <title>Alquileres || Proyecto ASATA</title>
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
                            <li><a class="dropdown-item action text-grey" href="/servicios">Servicios</a></li>
                            <li><a class="dropdown-item action text-grey  activa" href="/alquileres">Alquileres</a></li>
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
        <h2 class="text-center pb-5 mb-5 mt-5">Alquileres</h2>
        <section class="row row-cols-1 row-cols-md-3 mb-3 text-center">
            <article class="col">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h3 class="h4 my-0 fw-normal">Casas Rurales</h3>
                    </div>
                    <div class="card-body">
                        <h4 class="h1 card-title pricing-card-title">63&euro;<small class="text-muted">/Día</small></h4>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Servicio de translado</li>
                            <li>Servicio de limpieza</li>
                            <li>Parrilla en el jardín</li>
                            <li>Jacuzzi interior</li>
                            <li>Parking</li>
                        </ul>
                    </div>
                </div>
            </article>
            <article class="col">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h3 class="h4 my-0 fw-normal">Casas Rurales</h3>
                    </div>
                    <div class="card-body">
                        <h4 class="h1 card-title pricing-card-title">363&euro;<small class="text-muted">/Sem</small></h4>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Servicio de translado</li>
                            <li>Servicio de limpieza</li>
                            <li>Parrilla en el jardín</li>
                            <li>Jacuzzi interior</li>
                            <li>Parking</li>
                        </ul>
                    </div>
                </div>
            </article>
            <article class="col">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h3 class="h4 my-0 fw-normal">Casas Rurales</h3>
                    </div>
                    <div class="card-body">
                        <h4 class="h1 card-title pricing-card-title">1190&euro;<small class="text-muted">/Mes</small></h4>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Servicio de translado</li>
                            <li>Servicio de limpieza</li>
                            <li>Parrilla en el jardín</li>
                            <li>Jacuzzi interior</li>
                            <li>Parking</li>
                        </ul>
                    </div>
                </div>
            </article>
        </section>
        <section class="row row-cols-1 row-cols-md-3 mb-3 text-center">
            <article class="col">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h3 class="h4 my-0 fw-normal">Rutas en Quads</h3>
                    </div>
                    <div class="card-body">
                        <h4 class="h1 card-title pricing-card-title"><small class="text-muted">Desde</small> 45&euro;</h4>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>....</li>
                            <li>....</li>
                            <li>....</li>
                            <li>....</li>
                            <li></li>
                        </ul>
                    </div>
                </div>
            </article>
            <article class="col">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h3 class="h4 my-0 fw-normal">Rutas a Caballo</h3>
                    </div>
                    <div class="card-body">
                        <h4 class="h1 card-title pricing-card-title"><small class="text-muted">Desde</small> 25&euro;</h4>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>....</li>
                            <li>....</li>
                            <li>....</li>
                            <li>....</li>
                            <li>....</li>
                        </ul>
                    </div>
                </div>
            </article>
            <article class="col">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h3 class="h4 my-0 fw-normal">Rutas en MTB</h3>
                    </div>
                    <div class="card-body">
                        <h4 class="h1 card-title pricing-card-title"><small class="text-muted">Desde</small> 39&euro;</h4>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>....</li>
                            <li>....</li>
                            <li>....</li>
                            <li>....</li>
                            <li>....</li>
                        </ul>
                    </div>
                </div>
            </article>
        </section>
        <section class="row row-cols-1 row-cols-md-3 mb-3 text-center">
            <article class="col">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h3 class="h4 my-0 fw-normal">Parking</h3>
                    </div>
                    <div class="card-body">
                        <h4 class="h1 card-title pricing-card-title">Gratuito</h4>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>....</li>
                            <li>....</li>
                            <li>....</li>
                            <li>....</li>
                            <li>....</li>
                        </ul>
                    </div>
                </div>
            </article>
            <article class="col">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h3 class="h4 my-0 fw-normal">Mascotas</h3>
                    </div>
                    <div class="card-body">
                        <h4 class="h1 card-title pricing-card-title"><small class="text-muted">Desde</small> 3&euro;<small class="text-muted">/Día</small></h4>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>....</li>
                            <li>....</li>
                            <li>....</li>
                            <li>....</li>
                            <li>....</li>
                        </ul>
                    </div>
                </div>
            </article>
            <article class="col">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h3 class="h4 my-0 fw-normal">Rutas en MTB</h3>
                    </div>
                    <div class="card-body">
                        <h4 class="h1 card-title pricing-card-title"><small class="text-muted">Desde</small> 39&euro;</h4>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>....</li>
                            <li>....</li>
                            <li>....</li>
                            <li>....</li>
                            <li>....</li>
                        </ul>
                    </div>
                </div>
            </article>
        </section>
    </main>
@stop
