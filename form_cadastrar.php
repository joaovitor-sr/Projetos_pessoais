<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco e PHP</title>
    <link rel="stylesheet" href="edic/estilo.css">

</head>
<body>
    <div class="form" id="form">
    <h1 class="titulos" style="margin-left:10%">Cadastro</h1>
     <form method="post" action="cadastrar.php">
        <input type="text" class="campo_cad" name="email" placeholder="E-mail"/>
        <input type="text" name="nome"  class="campo_cad" placeholder="Nick"/>  
        <input type="password" name="senha"  placeholder="Senha" class="campo_cad"/>
        <input type="password" name="rsenha" placeholder="Repita a Senha" class="campo_cad"/>
        <input type="text" name="lembrete" placeholder="Lembrete" class="campo_cad"/>
        <input type="file" name="foto" class="campo_cad" placeholder="fotos"/>
        <div id="botoes" class="botoes">
            <input type="submit" value="Cadastrar-se" class="bt_cad"/>
            <input type="reset" value="Resetar" class="bt_cad"/> 
        </div>
        <div class="bloco_icones" id="bloco_icones">
        <a href="http://localhost/banco_dados/index.php" class="link_cad"><button><?php include "edic/back.svg"?></button></a>
        <a href="http://localhost/banco_dados/form-login.php"><button><?php include "edic/user.svg"?></button></a>
        </div>
    </form>
    </div>
</body>
</html>