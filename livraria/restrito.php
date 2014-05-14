

<head> <?php 
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{ unset($_SESSION['login']); unset($_SESSION['senha']);
header('location:home.php');
 } $logado = $_SESSION['login'];
?>


 <title>Livraria- Cadastro</title> </head>
 <body> 
	<?php echo" Bem vindo $logado"; ?> <a href="deslogar.php">Sair</a>
 <br>
	<a href="cadastralivros.php">Cadastro de Livros</a>
 <br>
	<a href="restrito.php">Área do administrador</a>
 
 
	<form method="GET" action="busca.php">



<label for="consulta">Buscar:</label>

<input type="text"  name="consulta" maxlength="255" />

<input type="submit" value="OK" />



</form>

 
 
 
 
 
 </body>
</html>
