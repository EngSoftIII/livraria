<?php
class Livro{ 

 
public $titulo ;
public $autor;
public $editora;
public $quantidade;
public $preco;
public $capa;
public $sinopse;

function InsereLivros(){
require("conecta.php");
$titulo = $_POST['Titulo'];
$autor = $_POST['Autor'];
$editora = $_POST['Editora'];
$quantidade= $_POST['Quantidade'];
$preco=$_POST['Preco'];
$capa=$_POST['Capa'];
$sinopse=$_POST['Sinopse'];

$nome_imagem = md5(uniqid(time())) . "." . "jpg";
$caminho_imagem = "img/" . $nome_imagem;

move_uploaded_file($capa["tmp_name"], $caminho_imagem); 

$sqlinsert = "INSERT INTO livros(titulo, autor, editora, quantidade, preco,capa, sinopse )VALUES('$titulo','$autor','$editora','$quantidade','$preco','$capa','$sinopse')";

mysql_query($sqlinsert) or die("Não foi possível inserir os dados"); 

echo("Dados inseridos com sucesso");

}

}

?>