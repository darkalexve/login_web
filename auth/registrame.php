<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
		<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<title>Sistema de Gestion - Jonathan Melendez</title>
</head>
<body>

<!-- formulario registro -->

<center><form method="post" action="" >
  <fieldset>
    <legend  style="font-size: 18pt"><b>Registro Unico de Usuarios</b></legend>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Ingresa tu nombre de usuario: </b></label>
      <input type="text" name="username" class="form-control" placeholder="Ingresa tu nombre" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; "><b>Ingresa tu email: </b></label>
      <input type="text" name="email" class="form-control"  required placeholder="Ingresa email"/>
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; "><b>Ingresa tu contraseña</b></label>
      <input type="password" name="pass" class="form-control"  placeholder="Ingresa contraseña" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Repite tu contraseña</b></label>
      <input type="password" name="rpass" class="form-control" required placeholder="repite contraseña" />
    </div>
      
    </div>
   
    <input  class="btn btn-danger" type="submit" name="submit" value="Registrarse"/>

  </fieldset>
</form></center>
</div>
<?php
		if(isset($_POST['submit'])){
			require("registro.php");
		}
	?>
<!--Fin formulario registro -->

</body>
</html>
