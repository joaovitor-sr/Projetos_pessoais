<?php
 $host = "localhost";
 $user = "root";
 $pass = "";
 $banco = "php";
 //usuario e senha do banco de dados (cmd)

 $link = mysqli_connect($host, $user, $pass, $banco);

 if(mysqli_connect_errno($link)){
     //echo "erro de conexão";
     }
 else{ 
 //echo "Conexão tudo Ok";
     
 }
?>