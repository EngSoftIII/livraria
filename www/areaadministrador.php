<?
if(!isset($_SESSION)) session_start();

$nivel_necessario = 2;

if(!isset($_SESSION['login']) OR($_SESSION['nivel']<$nivel_necessario)){
session_destroy();
header("Location: cadastro.php");
echo "Você não tem esse acesso!";
 exit;
}
?>

Área do administrador
<p>Olá, <?php echo $_SESSION['login'];?> </p>