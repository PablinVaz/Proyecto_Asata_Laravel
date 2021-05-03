@extends('layout')

@section('content')
    <head>
        <script src="./scripts/galeria.js"></script>
        <title>Galeria || Proyecto ASATA</title>
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
                        <a class="nav-link text-grey activa" href="/galeria">Galería</a>
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
    <h2 class="text-center">Galería</h2>
    <main class="container-sm">
        <section class="d-flex">
            <div class="panel activo" style="background-image: url(./img/galeria/casas/casaMontañaGaleria.jpg);">
                <h3>Nuestras casas rurales</h3>
            </div>
            <div class="panel" style="background-image: url(./img/galeria/casas/granjaGaleria.jpg);">
                <h3>Nuestras casas rurales</h3>
            </div>
            <div class="panel" style="background-image: url(./img//galeria/casas/casaLagoGaleria.jpg);">
                <h3>Nuestras casas rurales</h3>
            </div>
            <div class="panel" style="background-image: url(./img/galeria/casas/casaPraderaGaleria.jpg);">
                <h3>Nuestras casas rurales</h3>
            </div>
            <div class="panel" style="background-image: url(./img/galeria/casas/casaMontañaLagoGaleria.jpg);">
                <h3>Nuestras casas rurales</h3>
            </div>
        </section>
        <section class="d-flex">
            <div class="panel" style="background-image: url(./img/galeria/habitaciones/BedroomGaleria.jpg);">
                <h3>Habitación</h3>
            </div>
            <div class="panel" style="background-image: url(./img/galeria/habitaciones/HabitacionGaleria.jpg);">
                <h3>Habitación</h3>
            </div>
            <div class="panel" style="background-image: url(./img/galeria/habitaciones/BañoGaleria.jpg);">
                <h3>Baño completo</h3>
            </div>
            <div class="panel" style="background-image: url(./img/galeria/habitaciones/CocinaGaleria.jpg);">
                <h3>Cocina</h3>
            </div>
            <div class="panel" style="background-image: url(./img/galeria/habitaciones/SalonGaleria.jpg);">
                <h3>Salon con chimenea</h3>
            </div>
        </section>
        <section class="d-flex">
            <div class="panel" style="background-image: url(./img/galeria/servicios/DesayunoGaleria.jpg);">
                <h3>Buffet Libre</h3>
            </div>
            <div class="panel" style="background-image: url(./img/galeria/servicios/BuffetGaleria.jpg);">
                <h3>Buffet Libre</h3>
            </div>
            <div class="panel" style="background-image: url(./img/galeria/servicios/ConectividadGaleria.jpg);">
                <h3>Disponemos de conectividad</h3>
            </div>
            <div class="panel" style="background-image: url(./img/galeria/servicios/PiscinaGaleria.jpg);">
                <h3>Algunas de nuestras casa tiene piscina</h3>
            </div>
            <div class="panel" style="background-image: url(./img/galeria/servicios/PerroGaleria.jpg);">
                <h3>Admitimos mascotas</h3>
            </div>
        </section>
        <section class="d-flex">
            <div class="panel" style="background-image: url(./img/galeria/alquiler/catQuadsGaleria.jpg);">
                <h3>Aquileres de Quads</h3>
            </div>
            <div class="panel" style="background-image: url(./img/galeria/alquiler/horseGaleria.jpg);">
                <h3>Rutas a caballo</h3>
            </div>
            <div class="panel" style="background-image: url(./img/galeria/alquiler/quadsGaleria.jpg);">
                <h3>Rutas en Quads</h3>
            </div>
            <div class="panel" style="background-image: url(./img/galeria/alquiler/biciGaleria.jpg);">
                <h3>Rutas en bici</h3>
            </div>
            <div class="panel" style="background-image: url(./img/galeria/alquiler/bicipaseoGaleria.jpg);">
                <h3>Paseos en bici</h3>
            </div>
        </section>
    </main>
@stop
