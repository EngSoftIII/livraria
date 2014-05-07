<?
class Livro{ 

 
public $titulo ;
public $autor;
public $editora;
public $quantidade;
public $preco;

function InsereLivros(){
require("conecta.php");
$titulo = $_POST['Titulo'];
$autor = $_POST['Autor'];
$editora = $_POST['Editora'];
$quantidade= $_POST['Quantidade'];
$preco=$_POST['Preco'];

$sqlinsert = "INSERT INTO livros(titulo, autor, editora, quantidade, preco )VALUES('$titulo','$autor','$editora','$quantidade','$preco')";

mysql_query($sqlinsert) or die("Não foi possível inserir os dados"); 

echo("Dados inseridos com sucesso");

}

}

?>