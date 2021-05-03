@extends('layout')

@section('content')
    <head>
        <title>Noticias 2 || Proyecto ASATA</title>
    </head>
    <body class="d-flex flex-column h-100">
    <div class="jumbotron-image">
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
                                <li><a class="dropdown-item action text-grey" href="./nuestras_casas">Nuestras Casas</a></li>
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
    <main class="container-sm">
        <section>
            <h3 class="text-center h1 pb-3">Noticia 2</h3>

            <figure class="figure">
                <img src="./img/noticias/noticia3.jpg" class="figure-img img-fluid rounded" alt="Imagen de la primera noticia">
                <figcaption class="figure-caption text-center">El camino hacia nuestas casas.</figcaption>
            </figure>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi consectetur quasi, eveniet sint quam tempore dolorum voluptatem voluptatum. Earum accusamus, repellat iste fugiat possimus obcaecati magnam officia? Dignissimos, beatae numquam maxime debitis veniam animi corporis perferendis culpa dolor distinctio neque iste atque. Odit aut laborum quibusdam minima? Nisi, sint ab quia facilis, fuga porro provident rerum doloribus, soluta dignissimos vitae explicabo in. Nam eius assumenda nemo saepe, possimus provident. Illo debitis soluta laudantium rem facere magni excepturi dicta ducimus omnis, nihil sapiente dolor. Recusandae, beatae? Rerum laboriosam perspiciatis ut recusandae incidunt neque eveniet atque dolores, dignissimos molestiae odio voluptatibus modi repellat mollitia nesciunt aspernatur repudiandae officia. Quo, libero laboriosam! Aliquid obcaecati ullam sint quo, blanditiis incidunt, sed perferendis voluptate quas et adipisci delectus. Fugiat adipisci, id quidem delectus rerum dolor ratione odio illo placeat, sint officiis laborum dicta incidunt nobis perspiciatis? Placeat fugiat illum facilis voluptatum iure soluta sint minima dolorum ratione vero molestiae, nostrum unde consequuntur aliquid ipsa! Reiciendis non cupiditate ratione. Mollitia corporis, aliquid reprehenderit velit voluptatem similique deleniti quas, doloremque accusantium, possimus suscipit molestias recusandae alias ad nesciunt laudantium eaque quisquam ipsam illo quis debitis quod! Similique debitis sequi dolore ducimus officia voluptate porro error! Voluptatem neque autem aperiam, eaque, possimus totam quia reprehenderit blanditiis vitae nobis deleniti iure nulla. Tempora esse, eos nulla minus illum unde molestiae fuga totam autem quaerat laboriosam amet nihil ex itaque inventore vitae. Consequuntur, deserunt. Sed libero velit maiores obcaecati itaque, voluptates earum esse deleniti, aliquid aliquam quis reprehenderit iste architecto numquam consectetur vel impedit quaerat! Iusto reprehenderit possimus earum consequatur, quod velit error alias assumenda recusandae maiores molestias ipsum debitis id illum nisi a saepe vitae, laudantium natus iste quae voluptas. Expedita quas illum quo voluptatem, similique porro accusantium assumenda quod dolores odit maxime, mollitia ducimus ad vel itaque alias eligendi doloremque sapiente ipsam harum rem ipsa ullam, blanditiis facere. Deleniti, excepturi ipsum in aut ipsa dicta exercitationem, maiores voluptas, eveniet sunt placeat commodi repudiandae beatae nam cum tenetur nostrum? Rerum vel veniam corrupti sapiente consequatur architecto nulla libero quaerat? Molestias eligendi, nihil perferendis cupiditate assumenda fugiat numquam explicabo ullam ad omnis quis repellendus necessitatibus vero veritatis odio obcaecati dolorem fugit iste placeat facilis voluptatum sint animi! Nesciunt earum repellat, nostrum at a totam, optio ducimus quae ad amet vitae voluptate harum fugit sint laboriosam voluptas? Voluptate molestias fugit ipsum soluta quas maxime repellendus, animi rerum excepturi officiis? Harum, obcaecati.</p>
        </section>
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-end">
                <li class="page-item">
                    <a class="page-link text-grey-dark" href="/noticia1" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                <li class="page-item"><a class="page-link text-grey-dark" href="/noticia1">1</a></li>
                <li class="page-item" aria-current="page">
                    <a class="page-link bg-grey-dark text-grey" href="/noticia2">2</a>
                </li>
                <li class="page-item disabled">
                    <a class="page-link text-grey" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </main>
@stop
