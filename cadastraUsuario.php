<?php
include "template/header.php";
include "template/top.php";
include "template/login.php";
include "template/loginsearch.php";
?>
<head>
    <script language = "javascript" type = "text/javascript" >
        function validarUsuario() {
            var Nome = form1.Nome.value;
            var Email = form1.Email.value;
            var Senha = form1.Senha.value;
            var Senha2 = form1.Senha2.value;
            if (Nome == "") {
                alert('Preencha o campo nome');
                form1.Nome.focus();
                return false;
            }

            if (Email == "") {
                alert('Preencha o campo email');
                form1.Email.focus();
                return false;
            }


            if (Senha != Senha2) {
                alert('Senhas diferentes');
                form1.Senha.focus();
                return false;

            }





        }
    </script> 
</head>




<body>
    <div id=tudo>
        <div id=centro>
            <div id=titulo><h3>Realizar cadastro</h3></div>	
            <form name="form1" form action="insereUsuario.php" method=post>
                <br>Nome:
                <input type=text name=Nome>
                <br>Login:
                <input type=text name=Login>
                <br>Senha:
                <input type=password name=Senha>
                <br>Digite novamente a senha:
                <input type=password name=Senha2>                                
                <br>Email:
                <input type=text name=Email>
                <br>Endereço:
                <input type=text name=Endereco>


                <br><input type=submit value="Gravar" onclick="return validarUsuario()">
            </form>
            <br><a href="restrito.php">Voltar</a>
        </div>
    </div>	
</body>





</html>