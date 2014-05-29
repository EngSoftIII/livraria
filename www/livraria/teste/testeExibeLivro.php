<?php
$codigolivro = $_SESSION['Codigo'];

$sql=mysql_query("SELECT * FROM livros WHERE codigo='.$codigolivro.'");
$result=mysql_num_rows($sql);




?>

