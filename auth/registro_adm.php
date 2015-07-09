<?php

	$realname=$_POST['realname'];	
	$username=$_POST['username'];
	$mail=$_POST['email'];
	$cedula=$_POST['dni'];
	$pass= $_POST['pass'];
	$rpass=$_POST['rpass'];

	require("connect_db.php");
	$checkuser=mysql_query("SELECT * FROM login WHERE user='$username'");
	$check_user=mysql_num_rows($checkuser);
		if($pass==$rpass){
			if($check_user>0){
				echo ' <script language="javascript">alert("Atencion, ya existe este usuario, por favor coloca otro, si olvidaste tu clave contacta al Administrador.");</script> ';
			}else{
				
				//Password Encriptada					
				$passencript=md5($pass);
				//require("connect_db.php");
				mysql_query("INSERT INTO login VALUES('','$cedula','$realname','$username','','$mail','$passencript')");
				//echo 'Se ha registrado con exito';
				echo ' <script language="javascript">alert("Administrador registrado con éxito");</script> ';

				mysql_close($link);
			}
			
		}else{
			echo '<script language="javascript">alert("Las Contraseñas NO Coinciden, colocas nuevamente");</script>';
		}

	
?>
