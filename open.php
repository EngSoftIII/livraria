<?php
include "config/conecta.php";
include "header.php";

session_start();
$login = $_POST['login'];
$senha = $_POST['senha'];
$login_escape = addslashes($login);
$senha_escape = addslashes($senha);

if (!empty($_POST) AND ( empty($_POST['login']) OR empty($_POST['senha']))) {
    header("Location: index.php");
    exit;
}




$result = mysql_query("SELECT * FROM USUARIOS WHERE LOGIN = '{$login_escape}' AND SENHA= '{$senha_escape}'");
$linha = mysql_fetch_array($result);

if (mysql_num_rows($result) > 0) {

    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senha;
    $nome= $linha['nome'];
	$_SESSION['nome']=$nome;;
	$_SESSION['nome']=$nome;
	$codigo = $linha['codigo'];
    $_SESSION['codigo'] = $codigo;
    $nivel = $linha['nivel_acesso'];
    $_SESSION['nivel'] = $nivel;
    $valida = 1;
    $_SESSION['valida'] = $valida;
    $ativo = $linha[ativo];

    if ($ativo == 0) {
        echo "Usuário não existe!";
        session_destroy();
        header('location:index.php');
    }

    if ($nivel > 1) {

        $_session['logou'] = 1;
        header('location:restrito.php');
    } else {
        header('location:areaCliente.php');
    }
} else {
    unset($_SESSION['login']);
    unset($_SESSION['senha']);

    header('location:index.php');
}
?>

