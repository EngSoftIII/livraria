<?php
require("config/conecta.php");
require("class/livro.class.php");



$livro= new Livro;
$livro->InsereLivros();
header ("location:index.php");
?>