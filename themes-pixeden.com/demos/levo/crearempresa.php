<?php
session_start();
if (isset($_SESSION["usuario"]) && isset($_SESSION["pass"])) {
    
} else {
    header("location:login.php");
}
?>
<!doctype html>
<html lang="en">

    <!-- Mirrored from themes-pixeden.com/demos/levo/tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Sep 2016 19:35:02 GMT -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Levo Admin Theme</title>

        <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet" />

        <link rel="stylesheet" href="../../../code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
        <link rel="stylesheet" href="jquery-jvectormap-1.2.2/jquery-jvectormap-1.2.2.css"/>
        <link href="css/style.css" rel="stylesheet" />


    </head>
    <body>

        <header class="top-bar">
            <a class="mobile-nav" href="#"><i class="pe-7s-menu"></i></a>
            <div class="main-logo">Bies <span>Advertising</span></div>
            <input type="checkbox" id="s-logo" class="sw" />
            <label class="switch switch--dark switch--header" for="s-logo"></label>

            <div class="main-search">
                <input type="text" placeholder="Search for task, goal &amp; review" id="msearch">
                <label for="msearch">
                    <i class="pe-7s-search"></i>
                </label>
            </div>
            <ul class="profile">
                <li>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" onclick="return false;" class="profile__user">
                        <figure class="pull-left rounded-image profile__img"></figure>
                        <span class="profile__name">
                            George <span>Smith</span> <i class="pe-7s-angle-down"></i>
                        </span>
                    </a>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="#"><i class="icon pe-7s-info"></i> Edit Profile</a></li>
                        <li><a href="#"><i class="icon pe-7s-date"></i> My Calendar</a></li>
                        <li><a href="cerrar.php"><i class="icon pe-7s-close-circle"></i> Log Out</a></li>
                    </ul>
                </li>
                <li class="profile--higlighted">
                    <span class="badge profile__badge badge--red">8</span>
                    <a class="dropdown-toggle" data-toggle="dropdown" onclick="return false;" href="#">
                        <i class="pe-7f-mail"></i>
                    </a>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="#"><i class="icon pe-7s-mail"></i> You have 8 unread messages</a></li>
                    </ul>
                </li>
                <li class="profile--higlighted">
                    <span class="badge profile__badge badge--red">5</span>
                    <a class="dropdown-toggle" data-toggle="dropdown" onclick="return false;" href="#">
                        <i class="pe-7f-drawer"></i>
                    </a>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="#"><i class="icon pe-7s-drawer"></i> You have 5 new notifications</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="pe-7f-config"></i>
                    </a>
                </li>
            </ul>

        </header> <!-- /top-bar -->

        <div class="wrapper">

            <aside class="sidebar">
                <ul class="main-nav">
                    <li class="main-nav--active">
                        <a class="main-nav__link" href="inicio.html">
                            <span class="main-nav__icon"><i class="icon pe-7s-home"></i></span>
                            Dashboard <span class="badge main-nav__badge badge--red">8</span>
                        </a>
                    </li>
                    <!--<li>
                            <a class="main-nav__link" href="ui.html">
                                    <span class="main-nav__icon"><i class="icon pe-7s-edit"></i></span>
                                    UI Elements
                            </a>
                    </li>-->
                    <li class="main-nav--collapsible">
                        <a class="main-nav__link" href="#">
                            <span class="main-nav__icon"><i class="icon pe-7s-photo-gallery"></i></span>
                            ADMINISTRAR
                        </a>
                        <ul class="main-nav__submenu">
                            <li><a href="crearempresa.php"><i class="pe-7s-help1"></i><span>Empresa</span></a></li>
                            <li><a href="crearsuc.php"><i class="pe-7s-note"></i><span>Sucursal</span></a></li>
                            <li><a href="crearprom.php"><i class="pe-7s-note"></i><span>Promocion</span></a></li>
                        </ul>
                    </li>

                </ul>
            </aside>|

            <section class="content">
                <header class="main-header clearfix">
                    <h1 class="main-header__title">
                        <i class="icon pe-7s-menu"></i>
                        Formulario Empresa <small></small>
                    </h1>
                    <ul class="main-header__breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active"><a href="#">Tables &amp; forms</a></li>
                    </ul>
                    <div class="main-header__date">
                        <i class="icon pe-7s-date"></i>
                        <span>December 27, 2013</span>
                        <i class="pe-7s-angle-down-circle"></i>
                    </div>
                </header>
                <div class="row">

                    <div class="col-md-12">
                        <article class="widget">
                            <header class="widget__header">
                                <h3 class="widget__title">Crear Empresa</h3>
                                <div class="widget__config">
                                    <a href="#"><i class="pe-7f-refresh"></i></a>
                                    <a href="#"><i class="pe-7s-close"></i></a>
                                </div>
                            </header>

                            <form id="formulario" method="post">

                                <div class="widget__content">
                                    <input type="text" name="nom" class="input-text" placeholder="Nombre" />
                                    <input type="text" name="nit" class="input-text" placeholder="Nit" />
                                    <input type="text" name="dir" class="input-text" placeholder="Dirección" />
                                    <input type="text" name="tel" class="input-text" placeholder="Teléfono" />
                                    <div class="dropdown">
                                        <select name="ti" class="dropdown-select">
                                            <option value="">Tipo</option>
                                            <option value="1">Bar/Discoteca</option>
                                            <option value="2">Centro Comercial</option>
                                            <option value="3">Local</option>
                                            <option value="4">Restaurante</option>
                                        </select>
                                    </div>
                                    <input type="submit" class="btn btn-light pull-right" id="btn-grabar" value="Guardar">
                                    <div class="clearfix"></div>
                                    <span id="loader_grabar" class=""></span>
                                </div>
                            </form>
                        </article>
                    </div>
                </div>


                <div class="row"><!-- /row -->
            </section> <!-- /content -->

            <footer class="main-footer">
                <a class="back-top" href="#"><i class="pe-7s-angle-up-circle"></i></a>
                <p>2013 © Levo by Pixeden.</p>
            </footer>
        </div> <!-- /wrapper -->
        <!-- Scripts -->
        <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="amcharts/amcharts.js"></script>
        <script type="text/javascript" src="amcharts/serial.js"></script>
        <script type="text/javascript" src="amcharts/pie.js"></script>
        <script type="text/javascript" src="js/chart.js"></script>
        <script type="text/javascript" src="js/map.js"></script>
        <script src="jquery-jvectormap-1.2.2/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="jquery-jvectormap-1.2.2/jquery-jvectormap-us-aea-en.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
    </body>
    <!-- Mirrored from themes-pixeden.com/demos/levo/tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Sep 2016 19:35:02 GMT -->
</html>
