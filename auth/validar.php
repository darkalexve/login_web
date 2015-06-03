<?php

	$username=$_POST['username'];
	$pass=$_POST['pass'];

require("connect_db.php");
/*Consulta de mysql con la que indicamos que necesitamos que seleccione
**solo los campos que tenga como nombre_administrador el que el formulario
**le ha enviado*/
$result = mysql_query("SELECT * FROM login WHERE user = '$username'");

/*
<!-- Validacion Usuario Normal -->
*/
//Validamos si el nombre del administrador existe en la base de datos o es correcto
if($row = mysql_fetch_array($result))
{  //Primer Corchete Usuario Normal   
//Si el usuario es correcto ahora validamos su contraseña
 if($row["password"] == $pass)
	{ //Abro Segundo Corchete
	//Creamos sesión
	session_start();  
	//Almacenamos el nombre de usuario en una variable de sesión usuario
  	$_SESSION['usuario'] = $username;

			//Redireccion al DashBoard + Pop de Bienvenida
			echo '<script>alert("Bienvenido Estimado '.$_SESSION['usuario'].'")</script> ';
		
			echo "<script>location.href='dashboard.php'</script>";
	} //Cierre Segundo Corchete

/*
<!-- Validacion Administradores -->
*/

$result2 = mysql_query("SELECT * FROM login WHERE user = '$username'");
if($row = mysql_fetch_array($result2))
{  //Primer Corchete Administradores 
//Si el usuario es correcto ahora validamos su contraseña
 if($row["pasadmin"] == $pass)
	{ //Abro Segundo Corchete Administradores

	//Creamos sesión
	session_start();  
	//Almacenamos el nombre de usuario en una variable de sesión usuario
  	$_SESSION['usuario'] = $username;

			//Redireccion al DashBoard + Pop de Bienvenida
			echo '<script>alert("Bienvenido Administrador '.$_SESSION['usuario'].'")</script> ';
		
			echo "<script>location.href='admin.php'</script>";
	} //Cierro Segundo Corchete Administradores
		else //Si no, (Si SQL no encuentra el password en la DB

		{ // Abro Corchete dentro de else 
		//En caso que la contraseña sea incorrecta enviamos un msj y redireccionamos a login.php
   
		echo '<script>alert("Contraseña Incorrecta")</script> ';
		echo "<script>location.href='index.php'</script>";
            
 		} //Cierro Corchete dentro de else
}  //Cierro Primer Corchete de Usuario Normal
}  //Cierro Segundo Corchete de Administradores
		else
		{
 		//en caso que el nombre de administrador es incorrecto enviamos un msj y redireccionamos a login.php

		echo '<script>alert("Este Usuario No Existe, favor registrese")</script> ';
		echo "<script>location.href='index.php'</script>";
		}


//Mysql_free_result() se usa para liberar la memoria empleada al realizar una consulta
mysql_free_result($result);

/*Mysql_close() se usa para cerrar la conexión a la Base de datos y es 
**necesario hacerlo para no sobrecargar al servidor, bueno en el caso de
**programar una aplicación que tendrá muchas visitas ;) .*/
mysql_close();
?>







