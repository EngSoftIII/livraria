<?php
include "template/header.php";
include "template/top.php";
include "template/logado.php";
include "template/loginsearch.php";


if ((!isset($_SESSION['login']) == true) and ( !isset($_SESSION['senha']) == true)) {
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('location:index.php');
} $logado = $_SESSION['login'];
?>

<head>
<script language="javascript" type="text/javascript" >
    function validarLivro(){
    var Titulo = form2.Titulo.value;
    var Editora = form2.Editora.value;
    var Genero = form2.Genero.value;
    var Autor = form2.Autor.value;
    var Preco = form2.Preco.value;
    var Quantidade= form2.Quantidae.value;
    var Img = form2.Img.value;
    var Sinopse = form2.Sinopse.value;

    if(Titulo == ""){
        alert('Preencha o campo Titulo');
                form2.Titulo.focus();
                return false;
    }
   
    
     if(Editora==""){
        alert('Preencha o campo Editora');
                form2.Editora.focus();
                return false;
    }
    
     if(Genero==""){
        alert('Preencha o campo genero');
                form2.Genero.focus();
                return false;
    }
    
    
    
    
    }
</script>        
</head>            



<body>	
    <div id=tudo>

        <div id=centro>
            <div id=titulo><h3>Cadastro de livros</h3></div>

            <div id=centro>	
                <div id=direita>
                    <ul>
                        <li><div id=label>Título:</div></li>
                        <li><div id=label>Editora:</div></li>
                        <li><div id=label>Gênero:</div></li>
                        <li><div id=label>Autor:</div></li>
                        <li><div id=label>Preço: R$ </div></li>
                        <li><div id=label>Quantidade:</div></li>
                        <li><div id=label>Capa:</div></li>
                        <li><div id=label>Sinopse:</div></li>
                    </ul>

                </div>


                <div id=esq>
                    <form name="form2" form action="insereLivro.php" method=post>
                        <ul>
                            <li><input type=text name=Titulo class=Input></li>
                            <li><input type=text name=Editora class=Input></li>
                            <li><input type=text name=Genero class=Input></li>
                            <li><input type=text name=Autor class=Input></li>
                            <li><input type=text name=Preco class=Input ></li>
                            <li><input type=text name=Quantidade class=Input></li>
                            <li><input type=text name=Img size="7" class=Input>.jpg</li>
                            <li><input type=text  name=Sinopse class=Input></li>
                            <li><input type=submit value="Gravar" onclick="return validarLivro()"></li>


                    </form>		
                    </ul>


                </div>


                <br><a href="restrito.php">Voltar</a>
            </div>
        </div>

    </div>
</body>

<?php
include "template/footer.php"
?>