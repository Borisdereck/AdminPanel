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

        <link rel="stylesheet" href="css/stylemap.css" charset="utf-8"/>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDvPKXwP7DQdEhOyLcZZE9HW7-1yC_8lFE">
        </script>
        <!--Jquery-->
        <script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
        <!--Bootstrap Css-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!--Bootstrap Js-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <!--Javascript Index-->
        <script type="text/javascript" src="Js/index.js"></script>        
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
                        Formulario Sucursal <small></small>
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
                    <div class="col-md-5">
                        <article class="widget">

                            <div class="widget__content">                        

                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    Agregar
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                            <div class="panel-body">
                                                <form id="formulario2">
                                                    <input type="text" class="form-control" name="nom" value="" placeholder="Nombre"><br>
                                                    <input type="text" class="form-control" name="tel" value="" placeholder="Telefono"><br>
                                                    <input type="text" class="form-control" name="dir" value=""placeholder="Direccion"><br>
                                                    <input type="text" class="form-control" readonly name="cx" value="" placeholder="Coordenada X"><br>
                                                    <input type="text" class="form-control" readonly name="cy" value="" placeholder="Coordenada X"><br>
                                                    Seleccione Empresa:
                                                    <div  class="dropdown empresa" >
                                                        <select name="ti" id="slt-cursos" class="form-control"></select>
                                                    </div><br>
                                                    <span id="loader_grabar" class=""></span>

                                                    <input type="submit" id="btn-grabarsuc" class="btn btn-success btn-sm" value="Guardar">
                                                    <input type="submit" class="btn btn-danger btn-sm" value="Cancelar">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingTwo">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    Ediccion
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                            <div class="panel-body">
                                                <form id="formulario_edicion">
                                                    <input type="hidden" name="id">
                                                    <table class="table">
        <!--                                                <thead>
                                                            <tr>
                                                                <th>Sucursal</th>
                                                            </tr>
                                                        </thead>-->
                                                        <tbody>
                                                            <tr>
                                                                <td>Nombre Empresa</td>
                                                                <td>
                                                                    <input type="text" class="form-control" name="titulo" value="">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Coordenada X</td>
                                                                <td>
                                                                    <input type="text" class="form-control" readonly name="cx" value="">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Coordenada Y</td>
                                                                <td>
                                                                    <input type="text" class="form-control" readonly name="cy" value="">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td><span id="loader_grabar" class=""></span></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>

                                                    <input type="submit" id="btn-actualizar" class="btn btn-success btn-sm" value="Actualizar">
                                                    <input type="button" id="botonborrarsuc" class="btn btn-danger btn-sm" value="Borrar">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-7">
                        <article class="widget">

                            <div class="widget__content">
                                <!--Aqui carga el mappa-->
                                <div id="mapa">

                                </div>
                            </div>
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
