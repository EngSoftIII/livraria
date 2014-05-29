<?php

include "template/header.php";
include "template/top.php";
include "template/logado.php";
include "template/loginsearch.php";
?>

<body>
	<div id=tudo>
		<div id=centro>
			<div id=titulo><h3>Atualizar cadastro</h3></div>
					<form action="alteraUsuario.php" method=post>
					<br>Novo Nome:
					<input type=text name=Nome>
					<br>Nova Senha:
					<input type=password name=Senha>
					<br>Novo Email:
					<input type=text name=Email>
					<br>Novo Endereço:
					<input type=text name=Endereco>
					<br><input type=submit value="Gravar">
				</form>
			<br><a href="areaCliente.php">Voltar</a>
			<br><a href="encerraConta.php">Encerrar conta</a>
	  </div>	
	</div>
 </body>


		
		
		
</html>

<?
include "template/footer.php";
?>
