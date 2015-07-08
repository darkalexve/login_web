<?php
include ("connect_db.php");
$con=conectar(); //almacena la conexion.
if(isset($_REQUEST['borrar'])){
$reg=mysql_query("SELECT ID FROM login where user='$_POST[userdel]'");
if($be=mysql_fetch_array($reg)){
mysql_query("DELETE FROM login where user='$_POST[userdel]'");
echo "Datos eliminados";
}
else
{
echo "Los datos no han sido eliminados";
}
}
?>
