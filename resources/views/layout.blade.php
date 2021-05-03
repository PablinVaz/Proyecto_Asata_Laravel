<!DOCTYPE html>
<html lang="es" class="h-100">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/bootstrap.min.css"/>
    <link rel="stylesheet" href="./css/estilos.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script defer src="./scripts/bootstrap.min.js" ></script>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
</head>

@yield('content')
<footer class="footer mt-auto pt-2 bg-grey-dark text-grey">

    <ul class="list-unstyled list-inline text-center mb-1">
        <li class="list-inline-item">
            <a href="#" class="btn-floating btn-fb mx-1">
                <i class="bi bi-facebook text-grey"> </i>
            </a>
        </li>
        <li class="list-inline-item">
            <a href="#" class="btn-floating btn-tw mx-1">
                <i class="bi bi-twitter text-grey"> </i>
            </a>
        </li>
        <li class="list-inline-item">
            <a href="#" class="btn-floatin btn-gplus mx-1">
                <i class="bi bi-google text-grey"> </i>
            </a>
        </li>
        <li class="list-inline-item">
            <a href="#" class="btn-floating btn-li mx-1">
                <i class="bi bi-linkedin text-grey"> </i>
            </a>
        </li>
    </ul>
    <div class="text-center py-2">
        <p class="mb-1">&copy; 2021 Copyright: Pablo Vázquez González</p>
    </div>
</footer>
</body>
</html>
