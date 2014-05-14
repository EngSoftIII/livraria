<?php
require("conecta.php");
require("class/usuario.class.php");

$usuario= new Usuario;
$usuario->InsereUsuario();

?>