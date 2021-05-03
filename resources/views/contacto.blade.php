@extends('layout')

@section('content')
    <head>
        <title>Contacto || Proyecto ASATA</title>
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
                        <a class="nav-link text-grey" href="/faqs">FAQS</a>
                    </li>
                    <li class="nav-item action ps-2 pe-2">
                        <a class="nav-link text-grey activa" href="/contacto">Contacto</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <h2 class="text-center mt-4 mb-4">CONTACTO</h2>
        <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5810.297995691286!2d-4.991535621812176!3d43.26925422865894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd49d9667b79883f%3A0x8e69233381cafcac!2sLagos%20de%20Covadonga%20%2F%20Cuadonga!5e0!3m2!1ses!2ses!4v1614001987797!5m2!1ses!2ses" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        <hr class="container mb-4">
        <section class="container text-center">
            <h3>FORMULARIO DE CONTACTO</h3>
            <form class="needs-validation was-validated" novalidate="">
                <div class="container w-75">
                    <div class="form pt-4">
                        <input type="text" class="form-control text-muted" id="name" placeholder="Nombre completo" required>
                        <div class="valid-feedback">Perfecto.</div>
                        <div class="invalid-feedback">Por favor escriba su nombre.</div>
                    </div>
                    <div class="form pt-4">
                        <input type="email" class="form-control text-muted" id="email" placeholder="Email" required>
                        <div class="valid-feedback">Perfecto.</div>
                        <div class="invalid-feedback">Por favor escriba su Email.</div>
                    </div>
                    <div class="form pt-4">
                        <input type="text" class="form-control text-muted" id="subject" placeholder="Asunto" required>
                        <div class="valid-feedback">Perfecto.</div>
                        <div class="invalid-feedback">Por favor escriba su motivo.</div>
                    </div>
                    <div class="form pt-4">
                        <textarea class="form-control text-muted" id="message" placeholder="Mensaje" required></textarea>
                        <div class="valid-feedback">Perfecto.</div>
                        <div class="invalid-feedback">Por favor escriba su mensaje.</div>
                    </div>
                </div>
                <button class="mt-4 mb-5 btn bg-brown text-grey btn-lg" type="submit">Enviar</button>
            </form>
        </section>
    </main>
@stop
