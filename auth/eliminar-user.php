<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Zona Administrativa</title>
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
	require("connect_db.php");
	include("include/cabecera.php");
	?>
</div>
</header>

  <!-- Navbar
    ================================================== -->

<div class="navbar">
  <div class="navbar-inner">
	<div class="container">
	  <div class="nav-collapse">
		<ul class="nav">
			<li class=""><a href="admin.php">ADMINISTRADOR DEL SITIO</a></li>
			<li class=""><a href="ad_admin.php">AGREGAR ADMIN</a></li>
			<li class=""><a href="#">ELIMINAR USUARIOS</a></li>
			<li class=""><a href="dashboard.php">IR AL DASHBOARD</a></li>
			 
	
		</ul>
		<form action="#" class="navbar-search form-inline" style="margin-top:6px">
		
		</form>
		<ul class="nav pull-right">
			  <li><a href="cerrar.php"> Cerrar Cesión </a></li>			 
		</ul>
	  </div><!-- /.nav-collapse -->
	</div>
  </div><!-- /navbar-inner -->
</div>

<!-- ======================================================================================================================== -->
<div class="row">
	
	
		
	<div class="span12">

		<div class="caption">
		
<!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
		<h2> Eliminar Usuario</h2>

	<center><form name="forma" method="post" action="eliminar-user.php">
		Ingrese el nombre a eliminar:<input type="text" name="userdel" id="userdel">
	<input class="btn btn-danger" type="submit" name="borrar" value="Borrar">
	</form>
		<div class="span8">
		
		</div>	
		</div>	
		<br/>
		<br/>

<!-- Code PHP For Delete Users By Jonathan Melendez
      ================================================== -->
<?php

$userdelete=$_POST['userdel'];

if(isset($_REQUEST['borrar']))
{
$registro=mysql_query("SELECT ID FROM login where user='$userdelete'");
if($be=mysql_fetch_array($registro))
	{
	mysql_query("DELETE FROM login where user='$userdelete'");
	echo '<script>alert("El Usuario '.$userdelete.' fue eliminado satisfactoriamente")</script> ';
	}
	else
			{
			if (empty($_POST['userdel']))
				{echo '<script>alert("Debes introducir el usuario que deseas eliminar")</script> ';}
			else
			echo "<center><h3>El Usuario escrito NO EXISTE. Intente nuevamente</h3></center>.";
			}
}
?>
		


		<!--EMPIEZA DESLIZABLE-->
		
		 <!--TERMINA DESLIZABLE-->



		
		
		</div>

		


		

<!--///////////////////////////////////////////////////Termina cuerpo del documento interno////////////////////////////////////////////-->
</div>

	</div>
</div>
<!-- Footer
      ================================================== -->
<hr class="soften"/>
<footer class="footer">

<hr class="soften"/>
<p>&copy; Desarrollado por Jonathan Melendez <br/><br/></p>
 </footer>
</div><!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
	</style>
  </body>
</html>
