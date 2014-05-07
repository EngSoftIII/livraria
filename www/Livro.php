<?php

class Produto{
    
    public $conexao;
    public $banco;
    public $db;
    public $var;
    public $val;
    public $codigo;
	private $titulo;
	private $editora;
    private $autor;
	private $quantidade;
    public $preco;
   

    
    function __construct(){
        
        $conexao = mysql_pconnect("localhost","root","") or die (mysql_error());
        $banco = mysql_select_db("livraria");
    }
    
    function __set($var, $val){
        $this->$var = $val;
    
    }
    function setLivro(){
        //realiza o insert no banco de dados passando os valores do objeto criado
        $insertProdutos = mysql_query("insert into livros values(null,'$this->titulo','$this->editora','$this->autor','$this->quantidade','$this-preco')");

        if($insertLivros){
            $resposta="Inserido com sucesso";
        }else{
            $resposta ="Erro ao inserir";
        }
        
        return $resposta;
    }  
    function getLivro(){
        /* realiza o select no banco de dados e seleciona e guarda as informações na variavel $getProdutos,
        note que foi usava a chave estrangeira(utilizamos quando precisamos fazer alguma relacao com as tabelas) categoria que esta na tabela produto.
        */
        $getLivros = mysql_query("select * from livros, titulo where titulo = '$this->titulo' ");
        //este while serve para ir pegando os dados do select e enquanto existirem serem atribuidos a sua variavel e logo apos mostra-los na tela
        while($l = mysql_fetch_array($getLivros)){
            $this->titulo = $l["titulo"];
            $this->preco = $l["preco"];
            print '<br>Nome:'.$this->titulo."<br>";
            print 'Valor: R$ '.$this->preco."<br>";
        }
    }
    /* funcao que criei para fazer um select na tabela categorias e retornar todas as catergorias cadastradas dentro de um combo box(select) */
    function getSelect(){
        $getSelect = mysql_query("select * from livros");
        print "<label for='Categoria'>Categoria:<br>";
        print "<select name='Categoria'>";
        while($l = mysql_fetch_array($getSelect)){
            $this->codigo = $l["codigo"];
            $this->codigo = $l["codigo"];
            /*veja que o value do option e o cat_id e o cat_nome e apenas o que aparece para o usuario. E este cat_id que será salvo na tabela categorias no campo categoria, para podermos fazer a nossa associacao*/
           
        }
        print "</select>";
        print "</label>";
    }
}


?>