<?php

$host="localhost";
$user="root";
$senha="";
$bd="livraria";

 $conexao = mysql_pconnect($host,$user,$senha) or die (mysql_error());

 
	$db = @mysql_select_db($bd,$conexao)
  or die ("Não foi possivel conectar-se ao banco de dados!");
?>