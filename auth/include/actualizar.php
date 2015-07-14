<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Zona Administrativa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Jonathan Melendez">

    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

   
  </head>
<body data-offset="40" background="images/fondotot.jpg" style="background-attachment: fixed">
<div class="container">
<header class="header">
<div class="row">
	<?php
	require("../connect_db.php");
	include("cabecera.php");
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
			<li class=""><a href="../admin.php">Inicio</a></li>
				<li class="dropdown">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#">Acciones Administrativas <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li class="nav-header">Seleccione una Accion:</li>
					<li class="divider"></li>
					<li><a href="#">Agregar Administrador</a></li>
					<li><a href="listado.php">Listar Usuarios</a></li>
					<li><a href="eliminar-user.php">Eliminar Usuarios</a></li>
					
				</ul>
			<li class=""><a href="../dashboard.php">Dashboard</a></li>
			</li> 
	
		</ul>
		<form action="#" class="navbar-search form-inline" style="margin-top:6px">
		
		</form>
		<ul class="nav pull-right">

			  <li><a href="../cerrar.php"> Cerrar Cesión </a></li>			 
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
		<h2> Actualizacion de Datos</h2>

		<div class="well well-small">
		<hr class="soft"/>
		<div class="row-fluid">
				<form name="forma" method="post" action="actualizar.php">
				<h2><marquee>Ingrese los Siguientes Datos:</marquee></h2>
					<center><table border="1" class='table table-hover'>
					<tr class='warning'>
					<td>Nombre de Usuario Actual:</td>
					<td><input type="text" name="viejo" id="viejo"></td>
					</tr>
					<tr class='success'>
					<td> Nuevo Nombre de Usuario:</td>
					<td><input type="text" name="nuevo" id="nuevo"></td>
					</tr>
					</table>
						<input class="btn btn-primary" type="submit" name="actualizar" value="Actualizar">
				</form></center>


<!-- Code PHP For UPDATE Users By Jonathan Melendez
      ================================================== -->
<?php

$userold=$_POST['viejo'];
$usernew=$_POST['nuevo'];

if(isset($_REQUEST['actualizar']))
{
$registro=mysql_query("SELECT ID FROM login where user='$userold'");
	mysql_query("UPDATE login set user='$usernew' where user='$userold'") or die
		(mysql_error());
	echo '<script>alert("El Usuario '.$userold.' fue actualizado satisfactoriamente, ahora se llama: '.$usernew.'")</script> ';
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

    <script src="../bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
</style>
  </body>
</html>
