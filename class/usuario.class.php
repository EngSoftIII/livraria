<script type="text/javascript" language="javascript" src="js/jquery.js"></script>

<?php
class Usuario{

public $nome;
public $login;
public $senha;
public $email;
public $endereco;
public $codigo;

	function InsereUsuarios(){
		require("config/conecta.php");
		$nome = $_POST['Nome'];
		$login = $_POST['Login'];
		$senha = $_POST['Senha'];
		$email = $_POST['Email'];
		$endereco = $_POST['Endereco'];


		$sqlinsert = "INSERT INTO usuarios(nome, login, senha, email, endereco,ativo)VALUES('$nome','$login','$senha','$email','$endereco',1)";

		mysql_query($sqlinsert) or die("Não foi possível inserir os dados"); 
		?>
		<script type="text/javascript">
		alert('Usuário cadastrado com sucesso!');
		</script>
		<?php
		

	
} 

		
		function alteraUsuario(){
			require("config/conecta.php");
			$nome = $_POST['Nome'];
			$senha = $_POST['Senha'];
			$email = $_POST['Email'];
			$endereco = $_POST['Endereco'];
			session_start();
			$codigo=$_SESSION['codigo'];
			
			$sqlinsert = "UPDATE usuarios SET nome = '".$nome."', senha='".$senha."', email='".$email."', endereco='".$endereco."' WHERE codigo=".$codigo;		
			
			mysql_query($sqlinsert) or die("Não foi possível inserir os dados"); 

			echo("Usuário alterado com sucesso!" );
		}
		
		function encerraConta(){
			
                    
                        require("config/conecta.php");
			session_start();
			$codigo=$_SESSION['codigo'];
			
                                              
                        
			$sqlinsert = "UPDATE usuarios set ativo=0 where codigo=".$codigo;
			
			mysql_query($sqlinsert) or die("Não foi possível inserir os dados"); 
                        ?>
                      <script type="text/javascript">
                       </scrip>
                            
                        <?php
                        echo("Conta encerrada!" );
			
		}

	

}


?>