<?php 
session_start(); 
$login = $_POST['login'];
$senha = $_POST['senha'];
$nivel=0;

$con = mysql_connect("127.0.0.1", "root", "") or die ("Sem conexão com o servidor"); 
$select = mysql_select_db("livraria") or die("Sem acesso ao DB, Entre em contato com o Administrador"); 
$result = mysql_query("SELECT * FROM `USUARIOS` WHERE `LOGIN` = '$login' AND `SENHA`= '$senha'"); 

if(mysql_num_rows ($result) > 0 ) 
{ $_SESSION['login'] = $login;
 $_SESSION['senha'] = $senha;
 $_SESSION['nivel']=$nivel;
header('location:restrito.php'); 
}
	else{ unset ($_SESSION['login']);
	unset ($_SESSION['senha']);
header('location:home.php'); 
} 

?>

