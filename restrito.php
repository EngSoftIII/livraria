<?php
include "template/header.php";
include "template/top.php";
include "template/logado.php";
include "template/loginsearch.php";



if ((!isset($_SESSION['login']) == true) and ( !isset($_SESSION['senha']) == true)) {
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('location:index.php');
}


if ($_SESSION['nivel'] > 1) {
    
} else {
    unset($_SESSION['senha']);
    header('location:index.php');
}
?>



<body> 
    <div id=tudo>
        <div id=centro>
            <div id=titulo><h3>Administração</h3></div>
            <div id="icon">Cadastro de Livros<br><br><a href="cadastraLivro.php"><img src="img/livro.png"/></a></div>
            <div id="icon">Área do administrador<br><br><a href="areaAdministrador.php"><img src="img/lock.png"/></a></div>
            <div id="icon">Usuários<br><br><a href="cadastrarUsuario.php"><img src="img/people.png"/></a></div>
            <div id="icon"><a href="#">Ajuda</a></div>
        </div>
    </div>
</body>
</html>

<?php
include "template/footer.php"

?>