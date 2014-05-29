<?php
class Livro{ 

 
public $titulo ;
public $genero;
public $autor;
public $editora;
public $quantidade;
public $preco;
//public $capa;
public $sinopse;
public $img;




	function InsereLivros(){
		require("config/conecta.php");
		$titulo = $_POST['Titulo'];
		$genero = $_POST['Genero'];
		$autor = $_POST['Autor'];
		$editora = $_POST['Editora'];
		$quantidade= $_POST['Quantidade'];
		$preco=$_POST['Preco'];
		//$capa=$_POST['Img'];
		$sinopse=$_POST['Sinopse'];
		$img=$_POST['Img'];
		//$nome_imagem = md5(uniqid(time())) . "." . "jpg";
		//$caminho_imagem = "img/" . $nome_imagem;

		//move_uploaded_file($capa["tmp_name"], $caminho_imagem); //
 
			//if (!empty($_POST) AND (empty($_POST['Titulo']) OR empty($_POST['Genero']) OR empty($_POST['Autor']) OR empty($_POST['Editora']) OR empty($_POST['Quantidade']) OR empty($_POST['Preco']) OR empty($_POST['Img']) OR empty($_POST['Sinopse']))) {
			//	header("Location: cadastraLivro.php"); 
			//	exit;
			//}
	
		$sqlinsert = "INSERT INTO livros(titulo, genero, autor, editora, quantidade, preco,sinopse,img )VALUES('$titulo','$genero','$autor','$editora','$quantidade','$preco','$sinopse','$img')";
		header("Location: cadastraLivro.php?mensagem=Livro incluído com sucesso!");

		mysql_query($sqlinsert) or die("Não foi possível inserir os dados"); 
		header("Location: cadastraLivro.php");
	}

	
	





}

?>