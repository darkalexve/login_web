<?php
session_start();
$_SESSION['login']=array();
session_destroy();
header("location:index.php");
?>
