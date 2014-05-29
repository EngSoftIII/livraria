<?php
include "template/header.php";
include "template/top.php";
include "template/login.php";
include "template/loginsearch.php";
?>

<body>


    <div id=tudo>		

        <div id=centro>
            <div id=titulo><h2>Livros disponíveis</h2></div>	

            <div id=conteudo>

                <?php
                include "config/conecta.php";


                $sql = mysql_query("SELECT * from livros ORDER BY codigo DESC");
                $result = mysql_num_rows($sql);
                if ($result >= 1) {
                    while ($linha = mysql_fetch_array($sql)) {
                        ?>
                        <div id=livro>
                            <form action="exibeLivro.php" method="get">


                                <?php
                                 
                                $codigo=$linha['codigo'];
                                $_SESSION['cod']=$codigo;
                                $nome = $linha["titulo"];
                                $editora = $linha["editora"];
                                $preco = $linha["preco"];
                                $img = $linha["img"]; 
                                echo "<img src='img/".$img."' /><br><br>";
                               
                                echo "Título:".$nome."<br>";
                                echo "Editora:".$editora."<br>";
                                echo 'Preço: R$ '.number_format($preco,2,',','0')."<br>";
                                echo '<a href="carrinho.php?acao=add$codigo='.$codigo.'">Adicionar ao carrinho</a>'
                                ?>
                                
                            </form>

                        </div>


                        <?php
                    }
                } else {
                    echo "Não foi encontrado nenhum resultado";
                }
                ?>

            </div>	
        </div>


    </div>			
    <?php
    include "template/footer.php";
    ?>

</body>
