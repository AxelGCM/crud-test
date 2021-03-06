<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>GLI App | Cursos y certi</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('static/css/app.css') }}">
</head>

<body>
    <div class="sidebar">
        <div class="sidebar-brand">
            <img src="{{ asset('static/images/gli.png') }}" alt="Imagen de GLI">
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="">
                        <span class="far fa-user">
                        </span><span class="section1">Administradores</span>
                    </a>
                </li>
                <li>
                    <a href=""><span class="fa fa-book">
                    </span><span class="section1">Catálogos</span>
                    </a>
                </li>
                <li>
                    <a href=""><span class="fas fa-users">
                    </span><span class="section">Líderes</span>
                    </a>
                </li>
                <li>
                    <a href=""><span class="fas fa-user-friends">
                    </span><span class="section">Usuarios</span>
                    </a>
                </li>
                <li>
                    <a href=""><span class="fas fa-users">
                    </span><span class="section">Mi empresa</span>
                    </a>
                </li>
                <li>
                    <a href=""><span class="fas fa-apple-alt">
                    </span><span class="section1">Cursos</span>
                    </a>
                </li>
                <li>
                    <a href=""><span class="fas fa-user-friends">
                    </span><span class="section">Recompensas</span>
                    </a>
                </li>
                <li>
                    <a href=""><span class="fas fa-calendar-alt">
                    </span><span class="section1">Eventos</span>
                    </a>
                </li>
                <li>
                    <a href=""><span class="fas fa-exclamation-triangle">
                    </span><span class="section3">Notificaciones</span>
                    </a>
                </li>
                <li>
                    <a href=""><span class="fas fa-chart-line">
                    </span><span class="section4">Reportes</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="footer">
            <div class="helpbox">
                <ul>
                    <li class="helptext">
                        <p>¿Nesecitas ayuda?</p>
                        <p class="underline">Ir a Sección de ayuda</p>
                    </li>
                    <li>
                        <span class="fas fa-puzzle-piece"></span>
                    </li>
                </ul>
            </div>
            <div class="copy">
                <p>&copy; Copyright GLI 2021</p>
            </div>
        </div>
    </div>
    <div class="main-content">
        <div class="header">
            <ul>
                <li>
                    <div class="bar">
                        <span class="fas fa-search"></span>
                    </div>
                </li>
                <li>
                    <div class="v1"></div>
                </li>
                <li>
                    <div class="image-user">
                        <img class="circular--square" src="{{ asset('static/images/iconpng.png') }}" alt="algo">
                    </div>
                </li>
                <li>
                    <div class="user-wrapper">
                        <div class="bar">
                            <h4 class="adri">Adrian Stefan</h4>
                            <small>Recursos Humanos</small>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="search">
                        <span class="fas fa-sign-out-alt"></span>
                    </div>
                </li>
            </ul>

        </div>

        <main>
            <div class="section">
                <ul>
                    <li class="in">
                        <a href="#">Inicio</a>
                    </li>
                    <li>
                        <span class="fas fa-angle-right"></span>
                    </li>
                    <li>
                        <div  class="insub">
                            <a href="#">Administradores</a>
                        </div>
                    </li>
                </ul>
            </div>


            <div class="action">
                <h1>Administradores de la consola</h1>
                <img src="{{ asset('static/images/cheque.png') }}" alt="Check-image" class="image-check">
                <p class="name-l1">Cambios guardados</p>
                <p class="name-l2">Tu administrador se ha guardado con éxito</p>
            </div>

            <a type="submit" href="{{route('administrators.index')}}" class="button-add">Regresar a mis administradores</a>
        </main>
    </div>
</body>

</html>




