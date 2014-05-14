<?php

if(mysql_num_rows($query) !=1){
echo "Voce não tem acesso de administrador";exit;
}else{
$resultado = mysql_fetch_assoc($query);

if(!isset($_SESSION)) session_start();

$_SESSION['login']= $resultado['login'];
$_SESSION['senha']= $resultado['senha'];
$_SESSION['nivel']= $resultado['nivel'];

	header("Location: areaadministrador.php"); exit;
}


?>