<html>
	<head><?php 
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{ unset($_SESSION['login']); unset($_SESSION['senha']);
header('location:home.php');
 } $logado = $_SESSION['login'];
?>

<title>Cadastro de Usuários </title>
	</head>

	  <body>	
		<form action="insereUsuario.php" method=post>
			<br>Nome:
			<input type=text name=Nome>
			<br>Login:
			<input type=text name=Login>
			<br>Senha:
			<input type=passwords name=Senha>
			<br>Email:
			<input type=text name=Email>
			<br>Endereço:
			<input type=text name=Endereco>
		
			
			<br><input type=submit value="Gravar">
		</form>
   <br><a href="restrito.php">Voltar</a>

 </body>


		
		
		
</html>