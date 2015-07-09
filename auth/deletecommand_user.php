<?php

$username=$_POST['userdel'];

include ("connect_db.php");
if(isset($_REQUEST['borrar'])){
$registro=mysql_query("SELECT ID FROM login where user='$username'");
if($be=mysql_fetch_array($registro)){
mysql_query("DELETE FROM login where user='$username'");
echo "Datos eliminados";
}
else
{
echo "Los datos no han sido eliminados";
}
}
?>
