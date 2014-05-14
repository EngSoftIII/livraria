<?php
require("conecta.php");
require("class/livro.class.php");

$livro= new Livro;
$livro->InsereLivros();

?>