<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
	<title>Sistema de Gestion - Jonathan Melendez</title>
</head>
<body>

<!-- formulario registro -->

<center><form method="post" action="" >
  <fieldset>
    <legend  style="font-size: 22pt"><b>Registro Unico de Administradores</b></legend>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Ingrese Nombre y Apellido: </b></label>
      <input type="text" name="realname" class="form-control" required placeholder="Ingresa tu nombre y apellido real" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Ingrese nombre de usuario: </b></label>
      <input type="text" name="username" class="form-control" required placeholder="Ingresa tu nombre" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; "><b>Ingrese el email: </b></label>
      <input type="text" name="email" class="form-control"  required placeholder="Ingresa email"/>
    </div>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Ingrese la Cedula de Identidad: </b></label>
      <input type="text" name="dni" class="form-control" required placeholder="Ingresa tu cedula" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; "><b>Ingrese la contraseña</b></label>
      <input type="password" name="pass" class="form-control"  placeholder="Ingresa contraseña" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Repite la contraseña</b></label>
      <input type="password" name="rpass" class="form-control" required placeholder="Repite contraseña" />
    </div>
      
    </div>
   
    <center><input  class="btn btn-danger" type="submit" name="submit" value="Registrarse"/></center>

  </fieldset>
</form></center>
</div>
<?php
		if(isset($_POST['submit'])){
			require("registro_adm.php");
		}
	?>
<!--Fin formulario registro -->

</body>
</html>
