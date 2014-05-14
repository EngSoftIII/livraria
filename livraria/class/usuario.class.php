<?
class Usuario{

public $nome;
public $login;
public $senha;
public $email;
public $endereco;

function InsereUsuario(){
$nome = $_POST['Nome'];
$login = $_POST['Login'];
$senha = $_POST['Senha'];
$email = $_POST['Email'];
$endereco = $_POST['Endereco'];


$sqlinsert = "INSERT INTO usuarios(nome, login, senha, email, endereco)VALUES('$nome','$login','$senha','$email','$endereco')";

mysql_query($sqlinsert) or die("Não foi possível inserir os dados"); 

echo("Usuário cadastrado com sucesso!" );



//$headers = "MIME-Version: 1.1\r\n";
//$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
//$headers .= "From: eu@seudominio.com\r\n"; // remetente
//$headers .= "Return-Path: eu@seudominio.com\r\n"; // return-path
//$envio = mail($email, "Assunto", "Texto", $headers);
 
//if($envio)
// echo "Mensagem enviada com sucesso";
//else
 //echo "A mensagem não pode ser enviada";

} 






}


?>