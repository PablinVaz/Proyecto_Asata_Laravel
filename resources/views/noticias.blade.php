@extends('layout')

@section('content')
    <head>
        <title>Noticias || Proyecto ASATA</title>
    </head>
    <body class="d-flex flex-column h-100">
    <div class="jumbotron-image-noticias">
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
                            <a class="nav-link text-grey activa" href="/noticias">Noticias</a></li>
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
        <h2 class="text-center text-light mt-5">Noticias</h2>
    </div>
    <nav class="navbar navbar-expand bg-brown mb-5">
        <ul class="container-sm navbar-nav container-fluid">
            <li class="nav-item p-md-2"><a class="navbar-brand text-grey-dark ps-2 p-md-2 px-md-4 action" href="#">Deportes</a></li>
            <li class="nav-item p-md-2"><a class="navbar-brand text-grey-dark p-md-2 px-md-4 action" href="#">Empleo</a></li>
            <li class="nav-item p-md-2"><a class="navbar-brand text-grey-dark p-md-2 px-md-4 action" href="#">Sociedad</a></li>
            <li class="nav-item p-md-2"><a class="navbar-brand text-grey-dark p-md-2 px-md-4 action" href="#">Sucesos</a></li>
        </ul>
    </nav>
    <main class="container-sm">

        <section class="row d-flex">
            <section class="col-12 col-md-9 order-md-2">
                <h3 class="text-center pb-3">Nuestras noticias</h3>
                <article class="mt-5">
                    <a href="/noticia1">
                        <figure class="figure w-50 float-start me-3 mb-1">
                            <img src="./img/noticias/noticia1.jpg" class=" figure-img img-fluid rounded" alt="Imagen de la primera noticia">
                            <figcaption class="figure-caption text-center">Vistas desde nuestras ventanas.</figcaption>
                        </figure>
                    </a>
                    <h4 class="text-center pb-1">Noticia 1</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi consectetur quasi, eveniet sint quam tempore dolorum voluptatem voluptatum. Earum accusamus, repellat iste fugiat possimus obcaecati magnam officia? Dignissimos, beatae numquam maxime debitis veniam animi corporis perferendis culpa dolor distinctio neque iste atque. Odit aut laborum quibusdam minima? Nisi, sint ab quia facilis, fuga porro provident rerum doloribus, soluta dignissimos vitae explicabo in. Nam eius assumenda nemo saepe, possimus provident. Illo debitis soluta laudantium rem facere magni excepturi dicta ducimus omnis, nihil sapiente dolor. Recusandae, beatae? Rerum laboriosam perspiciatis ut recusandae incidunt neque eveniet atque dolores, dignissimos molestiae odio voluptatibus modi repellat mollitia nesciunt aspernatur repudiandae officia. Quo, libero laboriosam! Aliquid obcaecati ullam sint quo, blanditiis incidunt, sed perferendis voluptate quas et adipisci delectus. Fugiat adipisci, id quidem delectus rerum dolor ratione odio illo placeat, sint officiis laborum dicta incidunt nobis perspiciatis? Deleniti, excepturi ipsum in aut ipsa dicta exercitationem, maiores voluptas, eveniet sunt placeat commodi repudiandae beatae nam cum tenetur nostrum? Rerum vel veniam corrupti sapiente consequatur architecto nulla libero quaerat?</p>
                    <div class="d-flex justify-content-end">
                        <a class="btn bg-brown" href="/noticia1">Leer más...</a>
                    </div>
                </article>
                <article class="mt-5 mb-5">
                    <a href="/noticia2">
                        <figure class="figure w-50 float-start me-3 mb-1">
                            <img src="./img/noticias/noticia2.jpg" class=" figure-img img-fluid rounded" alt="Imagen de la segunda noticia">
                            <figcaption class="figure-caption text-center">Vistas desde nuestras ventanas.</figcaption>
                        </figure>
                    </a>
                    <h4 class="text-center pb-1">Noticia 2</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi consectetur quasi, eveniet sint quam tempore dolorum voluptatem voluptatum. Earum accusamus, repellat iste fugiat possimus obcaecati magnam officia? Dignissimos, beatae numquam maxime debitis veniam animi corporis perferendis culpa dolor distinctio neque iste atque. Odit aut laborum quibusdam minima? Nisi, sint ab quia facilis, fuga porro provident rerum doloribus, soluta dignissimos vitae explicabo in. Nam eius assumenda nemo saepe, possimus provident. Illo debitis soluta laudantium rem facere magni excepturi dicta ducimus omnis, nihil sapiente dolor. Recusandae, beatae? Rerum laboriosam perspiciatis ut recusandae incidunt neque eveniet atque dolores, dignissimos molestiae odio voluptatibus modi repellat mollitia nesciunt aspernatur repudiandae officia. Quo, libero laboriosam! Aliquid obcaecati ullam sint quo, blanditiis incidunt, sed perferendis voluptate quas et adipisci delectus. Fugiat adipisci, id quidem delectus rerum dolor ratione odio illo placeat, sint officiis laborum dicta incidunt nobis perspiciatis? Deleniti, excepturi ipsum in aut ipsa dicta exercitationem, maiores voluptas, eveniet sunt placeat commodi repudiandae beatae nam cum tenetur nostrum? Rerum vel veniam corrupti sapiente consequatur architecto nulla libero quaerat?</p>
                    <div class="d-flex justify-content-end">
                        <a class="btn bg-brown" href="/noticia2">Leer más...</a>
                    </div>
                </article>
            </section>
            <section class="col-12 col-md-3 order-md-1">
                <article class="list-group list-group-flush">
                    <h3 class="h5 text-center pb-3">Noticias más visitadas</h3>
                    <a href="/noticia1" class="list-group-item list-group-item-action pb-3" aria-current="true">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Noticia 1</h5>
                            <small>1 days ago</small>
                        </div>
                        <p class="mb-1">Some placeholder content in a paragraph.</p>
                        <small>And some small print.</small>
                    </a>
                    <a href="/noticia2" class="list-group-item list-group-item-action pb-3">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Noticia 2</h5>
                            <small class="text-muted">3 days ago</small>
                        </div>
                        <p class="mb-1">Some placeholder content in a paragraph.</p>
                        <small class="text-muted">And some muted small print.</small>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Item heading</h5>
                            <small class="text-muted">5 days ago</small>
                        </div>
                        <p class="mb-1">Some placeholder content in a paragraph.</p>
                        <small class="text-muted">And some muted small print.</small>
                    </a>
                </article>
                <article class="list-group list-group-flush mt-5">
                    <h3 class="h5 text-center pb-3">Últimas Noticias</h3>
                    <a href="/noticia1" class="list-group-item list-group-item-action pb-3" aria-current="true">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Noticia 1</h5>
                            <small>1 minute ago</small>
                        </div>
                        <p class="mb-1">Some placeholder content in a paragraph.</p>
                        <small>And some small print.</small>
                    </a>
                    <a href="/noticia2" class="list-group-item list-group-item-action pb-3">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Noticia 2</h5>
                            <small class="text-muted">5 minutes ago</small>
                        </div>
                        <p class="mb-1">Some placeholder content in a paragraph.</p>
                        <small class="text-muted">And some muted small print.</small>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Item heading</h5>
                            <small class="text-muted">1 hour ago</small>
                        </div>
                        <p class="mb-1">Some placeholder content in a paragraph.</p>
                        <small class="text-muted">And some muted small print.</small>
                    </a>
                </article>
            </section>
        </section>
    </main>
@stop
