<?php
//logar no banco de dados PHP 

 include "connect.php";

 $email = $_POST["email"];
 $senha = $_POST["senha"];

  if($email != "" && $senha != ""){
   $cod = "SELECT email, senha FROM tb_aula WHERE email = '$email'  AND senha = '$senha';";
   
   mysqli_query($link, $cod);

   $rows = mysqli_affected_rows($link);

   if($rows > 0){
       echo "Voce pode logar";
       
   }
   elseif($rows == 0){
       echo "essa conta não existe";
       echo "<br><a href=form-login.php>Voltar</a><br>";
       echo "<a href=form_cadastrar.php>Cadastrar-se</a><br>";
   }
  }

  elseif($senha != ""){
      echo "<script>alert('É necesario preencher o campo email'); window.history.go(-1);</script>";
  }
  elseif($email != ""){
      echo "<script>alert('É necessario preecher o campo senha'); window.history.go(-1);</script>";
  }
?>