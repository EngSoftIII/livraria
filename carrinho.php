<?php

include "template/header.php";
include "template/top.php";
include "template/logado.php";
include "template/loginsearch.php";


if (!isset($_SESSION['carrinho'])) {
    $_session['carrinho'] = array();
}

//adiciona livro

if (isset($_GET['acao'])) {

    if ($_GET['acao'] == 'add') {
        //adiciona Carrinho   

        if ($_GET['acao'] == 'add') {
            $codigo = intval($_GET['codigo']);
            if (!isset($_SESSION['carrinho'])){
                $_SESSION['carrinho']['$codigo']=1;
                
            }else{
                $_SESSION['carrinho'][$codigo] += 1;
            }
        }
    }
}
?>

<body>
    <div id=tudo>
        <div id=titulo><h2>Carrinho de compras</h2></div>
        <div id="centro">
            <div id="conteudo">

<?php
$array[1] = 10;
$array = array(1 => 10);
?>



                <table>

                    <thead>
                        <tr>
                            <th width="247">Livro:<th>
                            <th width="100">Quantidade:<th>   
                            <th width="80">Preço:<th>        
                            <th width="80">Subtotal:<th> 
                            <th width="80">Remover:<th>      
                        </tr>
                    </thead>  
                    <form action="?acao=up" method="post">



                        <tfoot>
                            <tr>
                                <td colspan='5'><input type="submit" value="Atualizar carrinho"/></td>   

                            <tr>

                                <td colspan='5'><input type="submit" value="Continuar compra"/></td>

                            </tr> 
                        </tfoot>

                               
                        <tbody>
                        
                                <?php
                                
                                    foreach($_SESSION['carrinho'] as $codigo => $quantidade){
                                        $sql="SELECT * FROM livros where codigo='$codigo' ";
                                       $query= mysql_query($sql) or die(mysql_error());
                                   
                                       
                                       
                                       
                                       
                                    }                 
                                            
                                
                                ?>
                            
                            <!-- 
                            <tr>
                                <td><br></td> 
                                <td><br></td> 
                                <td><br></td> 
                                <td><br></td> 
                                <td><br></td>    

                            </tr>

                             -->
                        </tbody>   

                    


                    </form>
            </div>   


            </table>


        </div>





    </div>
</div>
<?php
include "template/footer.php";
?>

</body>


