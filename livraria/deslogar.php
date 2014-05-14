

<? 

session_start(); 


unset($_SESSION[login]); 
unset($_SESSION[senha]);
session_destroy(); 


Header("Location: home.php"); 
?> 