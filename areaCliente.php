<?php 
include "template/header.php";
include "template/top.php";
include "template/logado.php";
include "template/loginsearch.php";



	if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
	{ unset($_SESSION['login']); unset($_SESSION['senha']);
	header('location:index.php');
	}
	
	if($_SESSION[nivel]==2){
	header('location:restrito.php');
	}
	
	
	
	
?>


 
 <body> 
	<div id=tudo>
		<div id=centro>
		<div id=titulo><h3>Área Cliente</h3></div>
		
			<?
			
			$codigo=$_SESSION['codigo'];
			
			?>
	
		
			<div id="icon">Atualizar cadastro<br><br><a href="atualizarCadastro.php"><img src="img/people.png"/></a></div>
			<div id="icon">Meus pedidos<br><br><a href="meusPedidos.php"><img src="img/pedido.png"/></a></div>
		
 
		

 
 
 
 
	</div>
 </div>
 </body>

<?php
include "template/footer.php";
?>
