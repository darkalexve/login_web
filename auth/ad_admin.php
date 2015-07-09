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
			<li class=""><a href="#">AGREGAR ADMIN</a></li>
			<li class=""><a href="eliminar-user.php">ELIMINAR USUARIOS</a></li>
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
		<h2> Añadir Administrador</h2>

	<center><form name="forma" method="post" action="ad_admin.php">
		Ingrese el nombre de usuario:<input type="text" name="useradd" id="useradd">
	<input class="btn btn-danger" type="submit" name="borrar" value="Añadir">
	</form>
		<div class="span8">
		
		</div>	
		</div>	
		<br/>
		<br/>

<!-- Code PHP For Delete Users By Jonathan Melendez
      ================================================== -->
<?php

$userpromotion=$_POST['useradd'];

if(isset($_REQUEST['borrar']))
{
$registro=mysql_query("SELECT ID FROM login where user='$userpromotion'");
if($be=mysql_fetch_array($registro))
	{
	mysql_query("DELETE FROM login where user='$userpromotion'");
	echo '<script>alert("El Usuario '.$userpromotion.' fue eliminado, ahora registralo como Admin.")</script> ';
	include("registrame_adm.php");
	}
	else
			{
			if (empty($_POST['userdel']))
				{echo '<script>alert("Debes introducir el usuario que deseas darle Rol Administrativo")</script> ';}
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
