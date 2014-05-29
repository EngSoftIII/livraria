<?php
require("config/conecta.php");
require("class/usuario.class.php");

$usuario= new Usuario;
$usuario->encerraConta();
session_destroy();
unset($_SESSION[login]); 
unset($_SESSION[senha]);
Header("Location: index.php"); 

?>