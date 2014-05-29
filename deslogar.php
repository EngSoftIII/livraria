<? 
include "template/header.php";


session_start(); 


unset($_SESSION[login]); 
unset($_SESSION[senha]);
session_destroy(); 
?><script>
			alert("Saindo")
		</script>
		<?php

Header("Location: index.php"); 
?> 