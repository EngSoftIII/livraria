<?php
include "template/header.php";
include "template/top.php";
include "config/conecta.php";
include "template/login.php";
include "template/loginsearch.php";

?>


<body>
<div id=tudo>
	<div id=centro>
		<div id=conteudo>
		<?
		$palavra = $_GET["consulta"];
		$sql = mysql_query("SELECT * from livros WHERE titulo LIKE '%".$palavra."%'");
		$result = mysql_num_rows($sql);
			if($result>=1) {
				echo "Exibindo ".$result." resultados para <strong>".$palavra."</strong><br><br>";
			while($linha = mysql_fetch_array($sql)) {
        $nome = $linha["titulo"];
		$editora = $linha["editora"];
		$preco = $linha["preco"];
        echo "Título:".$nome."<br>";
		echo "Editora:".$editora."<br>";
		echo "Preço:".$preco."<br>";
	
		}
		}else {
		echo "Não foi encontrado nenhum resultado para <strong>".$palavra."</strong>";
		}
		?>
		
		</div>	
	</div>
</div>

</body>
