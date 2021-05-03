@extends('layout')

@section('content')
    <head>
        <title>Nuestras Casas || Proyecto ASATA</title>
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
                            <li><a class="dropdown-item action text-grey activa" href="/nuestras_casas">Nuestras Casas</a></li>
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
    <main class="container-sm">

        <h2 class="text-center pb-5 mb-5 mt-5">Nuestras Casas Rurales</h2>

        <hr class="mb-5 mt-5 bg-caqui">

        <section class="row">
            <article class="col-md-7">
                <h3 class="text-center mb-3">Casa Asgard</h3>
                <p class="lead text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium veritatis cum eius soluta voluptate quidem labore omnis maxime dolore unde, consequuntur sint aut quos, alias, assumenda doloremque obcaecati qui sapiente sunt. Animi magnam laboriosam iure fugiat rerum quaerat cupiditate dolorem tempora ipsa deserunt voluptatem dolor unde incidunt repellat, maiores corrupti accusamus facilis voluptatum at nihil. Alias facilis earum quam, autem est consequuntur architecto perferendis doloribus, fugiat aliquam reprehenderit debitis. Quibusdam excepturi corporis modi?</p>
                <div class="row">
                    <form action="#" method="post" class="d-flex">
                        <div class="col-7 col-sm-9 col-md-7 col-lg-6 col-xl-6">
                            <select class="form-select" aria-label="select example">
                                <option selected disabled>Número de habitaciones</option>
                                <option value="1">Una</option>
                                <option value="2">Dos</option>
                                <option value="3">Tres: Casa completa</option>
                            </select>
                        </div>
                        <div class="col-2 col-sm-1 col-md-2 col-lg-4 col-xl-4"></div>
                        <div class="col-2 col-sm-1 col-md-3 col-lg-1 col-xl-1">
                            <input type="submit" class="btn bg-caqui" value="Escoger">
                        </div>
                    </form>
                </div>
            </article>
            <article class="col-md-5">
                <img class="w-100 mt-3" src="./img/galeria/casas/casaLagoGaleria.jpg" alt="Casa rural Asgard">
            </article>
        </section>

        <hr class="mb-5 mt-5 bg-caqui">

        <section class="row">

            <article class="col-md-7 order-md-2">
                <h3 class="text-center mb-3">Casa Valhalla</h3>
                <p class="lead text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium veritatis cum eius soluta voluptate quidem labore omnis maxime dolore unde, consequuntur sint aut quos, alias, assumenda doloremque obcaecati qui sapiente sunt. Animi magnam laboriosam iure fugiat rerum quaerat cupiditate dolorem tempora ipsa deserunt voluptatem dolor unde incidunt repellat, maiores corrupti accusamus facilis voluptatum at nihil. Alias facilis earum quam, autem est consequuntur architecto perferendis doloribus, fugiat aliquam reprehenderit debitis. Quibusdam excepturi corporis modi?</p>
                <div class="row">
                    <form action="#" method="post" class="d-flex">
                        <div class="col-7 col-sm-9 col-md-7 col-lg-6 col-xl-6">
                            <select class="form-select" aria-label="select example">
                                <option selected disabled>Número de habitaciones</option>
                                <option value="1">Una</option>
                                <option value="casaCompleta">Dos: Casa completa</option>
                            </select>
                        </div>
                        <div class="col-2 col-sm-1 col-md-2 col-lg-4 col-xl-4"></div>
                        <div class="col-2 col-sm-1 col-md-3 col-lg-1 col-xl-1">
                            <input type="submit" class="btn bg-caqui" value="Escoger">
                        </div>
                    </form>
                </div>
            </article>
            <article class="col-md-5 order-md-1">
                <img class="w-100 mt-3" src="./img/galeria/casas/casaMontañaLagoGaleria.jpg" alt="Casa rural Valhalla">
            </article>
        </section>

        <hr class="mb-5 mt-5 bg-caqui">

        <section class="row">
            <article class="col-md-7">
                <h3 class="text-center mb-3">Casa Wakanda</h3>
                <p class="lead text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium veritatis cum eius soluta voluptate quidem labore omnis maxime dolore unde, consequuntur sint aut quos, alias, assumenda doloremque obcaecati qui sapiente sunt. Animi magnam laboriosam iure fugiat rerum quaerat cupiditate dolorem tempora ipsa deserunt voluptatem dolor unde incidunt repellat, maiores corrupti accusamus facilis voluptatum at nihil. Alias facilis earum quam, autem est consequuntur architecto perferendis doloribus, fugiat aliquam reprehenderit debitis. Quibusdam excepturi corporis modi?</p>
                <div class="row">
                    <form action="#" method="post" class="d-flex">
                        <div class="col-7 col-sm-9 col-md-7 col-lg-6 col-xl-6">
                            <select class="form-select" aria-label="select example">
                                <option selected disabled>Número de habitaciones</option>
                                <option value="1">Una</option>
                                <option value="2">Dos</option>
                                <option value="3">Tres</option>
                                <option value="casaCompleta">Cuatro: Casa Completa</option>

                            </select>
                        </div>
                        <div class="col-2 col-sm-1 col-md-2 col-lg-4 col-xl-4"></div>
                        <div class="col-2 col-sm-1 col-md-3 col-lg-1 col-xl-1">
                            <input type="submit" class="btn bg-caqui" value="Escoger">
                        </div>
                    </form>
                </div>
            </article>
            <article class="col-md-5">
                <img class="w-100 mt-3" src="./img/galeria/casas/casaPraderaGaleria.jpg" alt="Casa rural Wakanda">
            </article>
        </section>

        <hr class="mb-5 mt-5 bg-caqui">

        <section class="row">
            <article class="col-md-7 order-md-2">
                <h3 class="text-center mb-3">Casa Midgard</h3>
                <p class="lead text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium veritatis cum eius soluta voluptate quidem labore omnis maxime dolore unde, consequuntur sint aut quos, alias, assumenda doloremque obcaecati qui sapiente sunt. Animi magnam laboriosam iure fugiat rerum quaerat cupiditate dolorem tempora ipsa deserunt voluptatem dolor unde incidunt repellat, maiores corrupti accusamus facilis voluptatum at nihil. Alias facilis earum quam, autem est consequuntur architecto perferendis doloribus, fugiat aliquam reprehenderit debitis. Quibusdam excepturi corporis modi?</p>
                <div class="row">
                    <form action="#" method="post" class="d-flex">
                        <div class="col-7 col-sm-9 col-md-7 col-lg-6 col-xl-6">
                            <select class="form-select" aria-label="select example">
                                <option selected disabled>Número de habitaciones</option>
                                <option value="1">Una</option>
                                <option value="casaCompleta">Dos: Casa completa</option>
                            </select>
                        </div>
                        <div class="col-2 col-sm-1 col-md-2 col-lg-4 col-xl-4"></div>
                        <div class="col-2 col-sm-1 col-md-3 col-lg-1 col-xl-1">
                            <input type="submit" class="btn bg-caqui" value="Escoger">
                        </div>
                    </form>
                </div>
            </article>
            <article class="col-md-5">
                <img class="w-100 mt-3" src="./img/galeria/casas/casaMontañaGaleria.jpg" alt="Casa rural Midgard">
            </article>
        </section>

        <hr class="mb-5 mt-5 bg-caqui">

        <section class="row">
            <article class="col-md-7">
                <h3 class="text-center mb-3">Casa Jötunheim</h3>
                <p class="lead text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium veritatis cum eius soluta voluptate quidem labore omnis maxime dolore unde, consequuntur sint aut quos, alias, assumenda doloremque obcaecati qui sapiente sunt. Animi magnam laboriosam iure fugiat rerum quaerat cupiditate dolorem tempora ipsa deserunt voluptatem dolor unde incidunt repellat, maiores corrupti accusamus facilis voluptatum at nihil. Alias facilis earum quam, autem est consequuntur architecto perferendis doloribus, fugiat aliquam reprehenderit debitis. Quibusdam excepturi corporis modi?</p>
                <div class="row">
                    <form action="#" method="post" class="d-flex">
                        <div class="col-7 col-sm-9 col-md-7 col-lg-6 col-xl-6">
                            <select class="form-select" aria-label="select example">
                                <option selected disabled>Número de habitaciones</option>
                                <option value="1">Una</option>
                                <option value="2">Dos</option>
                                <option value="3">Tres</option>
                                <option value="4">Cuatro</option>
                                <option value="casaCompleta">Cinco: Casa completa</option>
                            </select>
                        </div>
                        <div class="col-2 col-sm-1 col-md-2 col-lg-4 col-xl-4"></div>
                        <div class="col-2 col-sm-1 col-md-3 col-lg-1 col-xl-1">
                            <input type="submit" class="btn bg-caqui" value="Escoger">
                        </div>
                    </form>
                </div>
            </article>
            <article class="col-md-5">
                <img class="w-100 mt-3" src="./img/galeria/casas/granjaGaleria.jpg" alt="Casa rural Jötunhein">
            </article>
        </section>

        <hr class="mb-5 mt-5 bg-caqui">

    </main>
@stop
