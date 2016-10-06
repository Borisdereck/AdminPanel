<?php
session_start();
if (isset($_SESSION["usuario"]) && isset($_SESSION["pass"])) {
    
} else {
    header("location:login.php");
}
?>
<!doctype html>
<html lang="en">

    <!-- Mirrored from themes-pixeden.com/demos/levo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Sep 2016 19:33:42 GMT -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Levo Admin Theme</title>

        <link rel="apple-touch-icon" href="touch-icon-iphone.png" />
        <link rel="apple-touch-icon" sizes="76x76" href="touch-icon-ipad.png" />
        <link rel="apple-touch-icon" sizes="120x120" href="touch-icon-iphone-retina.png" />
        <link rel="apple-touch-icon" sizes="152x152" href="touch-icon-ipad-retina.png" />
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

        <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="../../../code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
        <link rel="stylesheet" href="jquery-jvectormap-1.2.2/jquery-jvectormap-1.2.2.css"/>
        <link href="css/style.css" rel="stylesheet" />

    </head>
    <body>

        <header class="top-bar">
            <a class="mobile-nav" href="#"><i class="pe-7s-menu"></i></a>
            <div class="main-logo">BieS <span>Advertising</span></div>
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
                        <figure class="pull-left rounded-image profile__img">
                        <!--	<img class="media-object" src="images/thumb0.jpg" alt="user">-->
                        </figure>
                        <span class="profile__name">
                            Aministrador <span>BieS</span> <i class="pe-7s-angle-down"></i>
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
                    <li>
                        <!--<a class="main-nav__link" href="grid.html">
                                <span class="main-nav__icon"><i class="icon pe-7s-crop"></i></span>
                                Grid Layout
                        </a>
                </li>
                <li>
                        <a class="main-nav__link" href="tables.html">
                                <span class="main-nav__icon"><i class="icon pe-7s-menu"></i></span>
                                Tables &amp; forms
                        </a>
                </li>
                <li>
                        <a class="main-nav__link" href="stats.html">
                                <span class="main-nav__icon"><i class="icon pe-7s-graph"></i></span>
                                Statistics <span class="badge main-nav__badge">16</span>
                        </a>
                </li> -->
                </ul>
            </aside> <!-- /main-nav -->


            <section class="content">
                <header class="main-header clearfix">
                    <h1 class="main-header__title">
                        <i class="icon pe-7s-home"></i>
                        Dashboard <small>Statistics and more</small>
                    </h1>
                    <ul class="main-header__breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Dashboard</a></li>
                        <li class="active"><a href="#">Sample Pages</a></li>
                    </ul>
                    <div class="main-header__date">
                        <i class="icon pe-7s-date"></i>
                        <span>December 27, 2013</span>
                        <i class="pe-7s-angle-down-circle"></i>
                    </div>
                </header>

                <div class="main-stats row">
                    <div class="main-stats__stat col-lg-3 col-md-12 col-sm-12">
                        <div class="widget__config">
                            <a href="#"><i class="pe-7f-refresh"></i></a>
                        </div>
                        <h3 class="stat__title">Total balance</h3>
                        <div class="stat__number"><span>$</span> 124,057</div>
                        <div class="progress">
                            <div class="progress-bar progress-bar--skyblue" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
                        </div> <!-- /progress -->
                        <p class="stat__details">
                            <i class="icon pe-7s-angle-up color--skyblue"></i>
                            <strong>27%</strong> more than last month
                        </p>
                    </div> <!-- /col -->

                    <div class="main-stats__stat col-lg-3 col-md-12 col-sm-12">
                        <div class="widget__config">
                            <a href="#"><i class="pe-7f-refresh"></i></a>
                        </div>
                        <h3 class="stat__title">New members</h3>
                        <div class="stat__number"><span>M</span> 7,068</div>
                        <div class="progress">
                            <div class="progress-bar progress-bar--anzac" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"></div>
                        </div> <!-- /progress -->
                        <p class="stat__details">
                            <i class="icon pe-7s-angle-down color--anzac"></i>
                            <strong>15%</strong> less than last month
                        </p>
                    </div> <!-- /col -->

                    <div class="main-stats__stat col-lg-3 col-md-12 col-sm-12">
                        <div class="widget__config">
                            <a href="#"><i class="pe-7f-refresh"></i></a>
                        </div>
                        <h3 class="stat__title">New visitors</h3>
                        <div class="stat__number"><span>V</span> 124,057</div>
                        <div class="progress">
                            <div class="progress-bar progress-bar--green" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                        </div> <!-- /progress -->
                        <p class="stat__details">
                            <i class="icon pe-7s-angle-up color--green"></i>
                            <strong>38%</strong> more than last month
                        </p>
                    </div> <!-- /col -->

                    <div class="main-stats__stat col-lg-3 col-md-12 col-sm-12">
                        <div class="widget__config">
                            <a href="#"><i class="pe-7f-refresh"></i></a>
                        </div>
                        <h3 class="stat__title">New orders</h3>
                        <div class="stat__number"><span>O</span> 2,407</div>
                        <div class="progress">
                            <div class="progress-bar progress-bar--red" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"></div>
                        </div> <!-- /progress -->
                        <p class="stat__details">
                            <i class="icon pe-7s-angle-down color--red"></i>
                            <strong>23%</strong> less than last month
                        </p>
                    </div> <!-- /col -->
                </div> <!-- row -->

                <div class="row">

                    <div class="col-md-7">
                        <article class="widget">
                            <header class="widget__header">
                                <h3 class="widget__title">Line chart</h3>
                                <div class="widget__config">
                                    <a href="#"><i class="pe-7f-refresh"></i></a>
                                    <a href="#"><i class="pe-7s-close"></i></a>
                                </div>
                            </header>

                            <div class="widget__content">
                                <p class="font-13">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, mollitia incidunt ipsa unde alias assumenda laboriosam delectus qui eos iure.</p>
                                <figure class="mtop-10">
                                    <div id="chartdiv" style="width: 100%; height: 362px;"></div>
                                </figure>

                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12 mtop-30 mini-barchart--wrapper">
                                        <div class="mini-barchart__text">
                                            <p>New members</p>
                                            <h3>7,068</h3>
                                        </div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="113.1px" height="52.5px" viewBox="0 0 113.1 52.5" class="mini-barchart--home">
                                        <g>
                                        <polygon style="fill:#B1E0E6;" points="18.3,51.5 0.5,51.5 0.5,7.4 18.3,17.6 	"/>
                                        <polygon style="fill:#B1E0E6;" points="37.3,51.5 19.5,51.5 19.5,17.6 37.3,7.4 	"/>
                                        <polygon style="fill:#B1E0E6;" points="56.2,51.5 38.4,51.5 38.4,7.4 56.2,41 	"/>
                                        <polygon style="fill:#B1E0E6;" points="75.2,51.5 57.4,51.5 57.4,41.1 75.2,27.1 	"/>
                                        <polygon style="fill:#B1E0E6;" points="94.1,51.5 76.4,51.5 76.4,27.1 94.1,44.3 	"/>
                                        <polygon style="fill:#B1E0E6;" points="113.1,51.5 95.3,51.5 95.3,44.3 113.1,51.5 	"/>
                                        </g>
                                        <rect x="0.5" y="0.5" style="fill:none;stroke:#E5E5E5;stroke-miterlimit:10;" width="112" height="51.5"/>
                                        </svg>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 mtop-30 mini-barchart--wrapper">
                                        <div class="pull-right">
                                            <div class="mini-barchart__text">
                                                <p>New orders</p>
                                                <h3>2,407</h3>
                                            </div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="113.1px" height="52.5px" viewBox="0 0 113.1 52.5" class="mini-barchart--home">
                                            <g>
                                            <polygon style="fill:#F8ACAB;" points="17.8,52 0,52 0,29.5 17.8,40.3 	"/>
                                            <polygon style="fill:#F8ACAB;" points="36.8,52 19,52 19,40.7 36.8,35.3 	"/>
                                            <polygon style="fill:#F8ACAB;" points="55.7,52 37.9,52 37.9,35.3 55.7,18.1 	"/>
                                            <polygon style="fill:#F8ACAB;" points="74.7,52 56.9,52 56.9,18.1 74.7,28.5 	"/>
                                            <polygon style="fill:#F8ACAB;" points="93.6,52 75.9,52 75.9,28.7 93.6,21.7 	"/>
                                            <polygon style="fill:#F8ACAB;" points="112.6,52 94.8,52 94.8,21.7 112.6,29.5 	"/>
                                            <rect x="0.6" y="0.5" style="fill:none;stroke:#E5E5E5;stroke-miterlimit:10;" width="112" height="51.5"/>
                                            </g>
                                            </svg>
                                        </div>
                                    </div>

                                </div> <!-- /row -->

                            </div>
                        </article><!-- /widget -->
                    </div>

                    <div class="col-md-5">
                        <article class="widget">
                            <header class="widget__header">
                                <h3 class="widget__title">Donut chart</h3>
                                <div class="widget__config">
                                    <a href="#"><i class="pe-7f-refresh"></i></a>
                                    <a href="#"><i class="pe-7s-close"></i></a>
                                </div>
                            </header>

                            <div class="widget__content">
                                <p class="font-13">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, mollitia incidunt ipsa unde alias assumenda laboriosam delectus qui eos iure.</p>
                                <figure class="cont">
                                    <div class="donut-info">
                                        <h3>My balance</h3>
                                        <h1>+36&nbsp;</h1>
                                    </div>
                                    <div id="chartdonut" style="width: 100%; height: 362px;"></div>
                                </figure>

                                <div class="row center">
                                    <div class="mini-donut col-md-3">
                                        <div class="circle">
                                            <div class="arc" id="arc-1"><div class="arc-in skyblue"></div></div>
                                            <i>40%</i>
                                        </div> <!-- /circle -->
                                        <span>Visits</span>
                                    </div>

                                    <div class="mini-donut col-md-3">
                                        <div class="circle">
                                            <div class="arc" id="arc-2"><div class="arc-in violet"></div></div>
                                            <i>25%</i>
                                        </div> <!-- /circle -->
                                        <span>Members</span>
                                    </div>

                                    <div class="mini-donut col-md-3">
                                        <div class="circle">
                                            <div class="arc" id="arc-3"><div class="arc-in green"></div></div>
                                            <i>23%</i>
                                        </div> <!-- /circle -->
                                        <span>Sales</span>
                                    </div>

                                    <div class="mini-donut col-md-3">
                                        <div class="circle">
                                            <div class="arc" id="arc-4"><div class="arc-in red"></div></div>
                                            <i>12%</i>
                                        </div> <!-- /circle -->
                                        <span>Lose</span>
                                    </div>
                                </div>

                            </div>
                        </article><!-- /widget -->
                    </div>


                </div> <!-- /row -->









            </section> <!-- /content -->

            <footer class="main-footer">
                <a class="back-top" href="#"><i class="pe-7s-angle-up-circle"></i></a>
                <p>2016 © BieS.</p>
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

    <!-- Mirrored from themes-pixeden.com/demos/levo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Sep 2016 19:34:17 GMT -->
</html>
