<?php

include('Livro.class.php');

if (isset($_GET['acao'])){
$acao = $_GET['acao'];

// Verifica qual formulario foi submetido
    switch($acao) {
        //se for setProduto
        case "setLivro":{
            
           

		   $livro1 = new Livro.class;
            //Atribuindo valores ao objeto
            $livro1->titulo = $_POST['Titulo'];
            $livro1->editora = $_POST['Editora'];
            $livro1->autor = $_POST['Autor'];
            $livro1->quantidade = $_POST['Quantidade'];
			$livro1->preco = $_POST['Preco'];
			
            //chamando a funcao que faz o insert
            $livro1->setLivro();
            }
            break;
        //se for setProduto
        case "getLivro": {
            $getLivro = new Livro;
            $getLivro->getLivro();
        }
        break;
    }

}
?>
<html>
<body>
    <p>Incluir Dados</p>
    <form action="<?php $SELF_PHP;?>?acao=setLivro" method="post" >
    <label for="Titulo">
    Título:
    <br />
    <input type="text" name="Titulo"/></label>
    <br />
    <label for="Editora">Editora:
    <br />
    <input type="text" name="Editora" /></label>
    <br />
    <label for="Autor">Autor:
    <br />
    <input type="text" name="Autor" /></label>
    <br />
	<label for="Quantidade">Quantidade:
    <br />
    <input type="text" name="Quantidade" /></label>
    <br />
	<label for="Preco">Preço:
    <br />
    <input type="text" name="Preco" /></label>
    <br />
    
  
    <br />
    <br />
    <input type="submit" value="Enviar" />
    </form>
   
   <p>Resgatar Dados</p>
    <form method="post" action="<?php $SELF_PHP;?>?acao=getLivro" >
       
       
        <input type="submit" value="Listar Livro" />
    </form>
</body>
</html>