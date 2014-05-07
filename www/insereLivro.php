<?php
require("conecta.php");
require("livro.class.php");

$livro= new Livro;
$livro->InsereLivros();

?>