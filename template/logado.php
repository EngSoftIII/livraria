<div id=content>
	<div id=logado><?php
		session_start();
		$logado = $_SESSION['login'];
		echo" Bem vindo <strong>$logado</strong>";?>        <a href="deslogar.php">Sair<a href="index.php">       <img src="img/home.png"></a>
	</div>
</div>
			
