<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sistema de Gestion Estudiantil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Jonathan Melendez">

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
  </head>
<body data-offset="40" background="images/fondotot.jpg" style="background-attachment: fixed">
<div class="container">
<header class="header">
<div class="row">
	<?php
	include("include/cabecera.php");
	?>
</div>
</header>

  <!-- Navbar
    ================================================== -->
<?php

include("include/menu.php");

?>
<!-- Bienvenida
     ======================================================================================================================== -->

	<?php
	//creamos la sesion
	session_start();
	if(!isset($_SESSION['usuario'])) 
	{ header('Location: index.php');
	  exit(); 
	} else {
	echo "Bienvenido Sr.: ".$_SESSION['usuario']."...!!";
	}
	?>

<!-- Footer
      ================================================== -->
<hr class="soften"/>
<footer class="footer">

<hr class="soften"/>
<p>&copy; Desarrollado por Jonathan Melendez <br/><br/></p>
 </footer>
</div><!-- /container -->
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
	</style>
  </body>
</html>
