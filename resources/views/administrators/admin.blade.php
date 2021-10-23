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
            </div>
            <div class="barcontent">
                <ul>
                    <li>
                        <div class="input-group">
                            <span class="fas fa-search"></span>
                            <input placeholder="Buscar" >
                        </div>
                    </li>
                    <li>
                        <a class="search-content" href="#">BUSCAR</a>
                    </li>
                    <li class="filter-content">
                        <a class="fas fa-filter" href="#"></a>
                    </li>
                    <li class="barright">
                        <a class="button-des" href="#">Descargar</a>
                        <a class="button-add" href="#">Agregar nuevo admin</a>
                    </li>
                </ul>
            </div>

            <div class="table-content">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr class="columnas">
                            <th><input type="checkbox"></th>
                            <th>
                                <ul>
                                    <p>Administradores</p>
                                </ul>
                            </th>
                            <th><p>Área</p></th>
                            <th><p>Correo electrónico</p></th>
                            <th><p>Estatus</p></th>
                            <th><p>Detalles</p></th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr  class="filas">
                                <td><input type="checkbox"></td>
                                <td><p>Maria Dias</p></td>
                                <td><p>Recursos Humanos</p></td>
                                <td><p>correo@gmail.com</p></td>
                                <td><p class="status-class">ACTIVO</p></td>
                                <td>
                                    <ul class="ul-actions">
                                        <li>
                                            <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                        </li>
                                        <li>
                                            <form action="#" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></button>
                                            </form>
                                        </li>

                                        <li>
                                            <a href="#" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                    </tbody>
                </table>
            </div>

        </main>
    </div>
</body>

</html>
