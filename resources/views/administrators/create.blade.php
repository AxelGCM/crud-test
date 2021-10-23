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
                <h1>Agregar administrador</h1>
            </div>
            <div class="barcontent">
                <p>Sube tu fotografía con un peso menor a 3MB</p>
                <form method="POST" action="{{route('administrators.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="bar-image">
                        <img class="img-icon" src="{{asset('static/images/login.png')}}" alt="Imagen de carga">
                        <p>Arrastra tu archivo o</p>
                        <label class="input-image"  for="icon">Selecciona</label>
                        <input type="file" accept="image/*" name="icon" id="icon" value="Selecciona" style="opacity:0;">
                    </div>
                    <div class="content-all">
                            <fieldset anabled>
                            <div class="form-group">
                                <label for="names">Nombre(s)</label>
                                <input type="text" name="names" id="names" class="form-control" placeholder="Nombre(s)">
                            </div>
                            <div class="form-group">
                                <label for="last_name">Apellidos</label>
                                <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Apellidos">
                            </div>
                            <div class="form-group">
                                <label for="email">Correo Electrónico</label>
                                <input type="text" name="email" id="email" class="form-control" placeholder="Correo electrónico">
                            </div>
                            <div class="form-group">
                                <label for="area">Área</label>
                                <select id="area" name="area" class="form-control">
                                <option>Recursos Humanos</option>
                                <option>Infraestructura</option>
                                <option>Contaduría</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select id="status"  name="status" class="form-control">
                                <option>Activo</option>
                                <option>Inactivo</option>
                                </select>
                            </div>
                            <a class="button-des" href="{{route('administrators.index')}}">Cancelar</a>
                            <button type="submit" class="button-add">Guardar cambios</button>
                            </fieldset>
                        </form>
                    </div>
                </form>
            </div>



        </main>
    </div>
</body>

</html>




