<?php
session_start();
if (isset($_SESSION["usuario"]) && isset($_SESSION["pass"]))
{
	header("location:menu.php");
}

 ?>

<!doctype html>
<html lang="en">

<!-- Mirrored from themes-pixeden.com/demos/levo/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Sep 2016 19:34:54 GMT -->
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
	<link rel="stylesheet" href="css/font-awesome-4.0.3/css/font-awesome.min.css">

	<link rel="stylesheet" href="../../../code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
	<link rel="stylesheet" href="jquery-jvectormap-1.2.2/jquery-jvectormap-1.2.2.css"/>
	<link href="css/style.css" rel="stylesheet" />

</head>
<body>


	<div class="wrapper login-page">

		<div class="row mtop-100">
			<div class="col-md-4 col-md-offset-4 clearfix bg--dark">

				<div class="main-logo">Bies <span>Advertising</span>
					<p>Bienvenido al panel de administración </p>
				</div>
				<form action="services/Procesar.php" method="post">
						<div class="input-group">
							<span class="input-group-addon"><i class="pe-7f-user"></i></span>
							<input type="text" name="ud" class="input-text form-control" placeholder="Username" />
						</div>
						<div class="input-group mtop-25">
							<span class="input-group-addon"><i class="pe-7f-lock"></i></span>
							<input type="password" name="pas" class="input-text form-control" placeholder="Password" />
						</div>
						<div class="clearfix"></div>
						<button class="btn btn-skyblue pull-right">ingresar</button>
				<!--<input type="button" class="btn btn-skyblue pull-right" name="name" value="Login">-->
				<!--<a href="inicio.html" class="btn btn-skyblue pull-right">Login</a>-->
			</form>
			</div>
		</div>

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

<!-- Mirrored from themes-pixeden.com/demos/levo/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Sep 2016 19:35:02 GMT -->
</html>
