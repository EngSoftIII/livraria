<html>
	<head><?php 
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{ unset($_SESSION['login']); unset($_SESSION['senha']);
header('location:login.php');
 } $logado = $_SESSION['login'];
?>

<title>Cadastro de Livros </title>
	</head>

	  <body>	
		<form action="insereLivro.php" method=post>
			<br>Título:
			<input type=text name=Titulo>
			<br>Editora:
			<input type=text name=Editora>
			<br>Autor:
			<input type=text name=Autor>
			<br>Preço:
			<input type=text name=Preco>
			<br>Quantidade:
			<input type=text name=Quantidade>
		
			<input type=submit value="Gravar">
		</form>
    </body>


		
		
		
</html>