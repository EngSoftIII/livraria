<?php
require("config/conecta.php");
require("class/usuario.class.php");

$usuario= new Usuario;
$usuario->InsereUsuarios();


?>