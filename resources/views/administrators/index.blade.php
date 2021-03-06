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
                        <a class="button-add" href="{{route('administrators.create')}}">Agregar nuevo admin</a>
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
                            @foreach ($administrators as $administrator)
                            <tr  class="filas">
                                    <td><input type="checkbox"></td>
                                    <td>
                                        <ul class="user-profile">
                                            <li>
                                                <img class="image-user" src="{{asset('static/images/users/'.$administrator->icon)}}" alt="Imagen usuario">
                                            </li>
                                            <li>
                                                <p>{{$administrator->names}} {{$administrator->last_name}}</p>
                                            </li>
                                        </ul>
                                    </td>
                                    <td><p>{{$administrator->area}}</p></td>
                                    <td><p>{{$administrator->email}}</p></td>
                                    @if ($administrator->status == '1')
                                        <td><p class="status-active">ACTIVO</p></td>
                                    @else
                                        <td><p class="status-inactive">INACTIVO</p></td>
                                    @endif
                                    <td>
                                        <ul class="ul-actions">
                                            <li>
                                                <a href="{{route('administrators.edit',$administrator->id)}}" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                            </li>
                                            <li>
                                                <form method="POST" action="{{ route('administrators.destroy',$administrator->id) }}" accept-charset="UTF-8" style="display:inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button id="btn-abrir-popup" type="submit" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></button>
                                                </form>
                                            </li>

                                            <li>
                                                <a href="{{route('administrators.show',$administrator->id)}}" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                                            </li>
                                        </ul>
                                    </td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>

        </main>
        <div class="overlay" id="overlay">
            <div class="popup" id="popup">
                <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
                <p class="admin-delete">Eliminar administrador</p>
                <hr>
                <ul class="user-profile dates-user">
                    <li>
                        <img class="image-user" src="#" alt="Admin">
                    </li>
                    <li>
                        <p class="name">Nombre</p>
                        <p class="email">Correo</p>
                    </li>
                </ul>
                <div class="font-down">
                    <ul class="user-profile bottom">
                        <li>
                            <button id='btn-cerrar' class="button-des">Cancelar</button>
                        </li>
                        <li>
                            <button class="button-add">Sí, eliminar</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('static/js/app.js') }}"></script>
</body>

</html>




