<?php

include ("connect.php");
/*arquivo para cadastrar clientes*/
$email = $_POST['email'];
$nome = $_POST['nome'];
$senha = $_POST['senha'];
$resenha = $_POST['rsenha'];
$lembrete = $_POST['lembrete'];
$foto = $_FILES["foto"]["name"];
$tipo = $_FILES["foto"]["type"];


 $registro = false;
 if(!empty($email) && !empty($nome) && !empty($senha) && !empty($resenha) && !empty($lembrete)){
        if($senha != $resenha){
             echo "<script>alert('Senhas estão diferentes'); window.history.go(-1);</script>";
        }else{
             $registro = true;
     }
 }else{
     echo "<script>alert ('É necesario preencher todos os campos'); window.history.go(-1);</script>";
 }
 
 if($registro == true){
        $sql = "SELECT senha FROM tb_aula WHERE senha = '$senha' AND email = '$email';";
        $result = mysqli_query($link, $sql);
        $rows = mysqli_affected_rows($link);
        if($rows > 0){
             echo "<script>alert ('essa senha ja esta sendo usada'); window.history.go(-1);</script>";
        }else {
              echo "Voce foi cadastrado";
              mysqli_query($link, "INSERT INTO tb_aula (email, nome, senha, lembrete) VALUES('$email', '$nome', '$senha', '$lembrete');");
              header ("Location: http://localhost/banco_dados/index.php ");
              
     }
   }

?>