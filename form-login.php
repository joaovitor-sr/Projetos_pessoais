<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco e PHP</title>
    <link rel="stylesheet" href="edic/estilo.css">

</head>
<body>
    <div class="form" id="form"><!div para arrumar o formulario
    centralizar e tamanho >
    <h1 class="titulos" style="margin-left:10%">Login</h1>
     <form method="post" action="http://localhost/banco_dados/logar.php">
        <input type="text" class="campo_cad" name="email" placeholder="E-mail"/>
        <input type="password" name="senha"  placeholder="Senha" class="campo_cad"/>
        <div id="botoes" class="botoes">
            <input type="submit" value="Logar" class="bt_cad"/>
            <input type="reset" value="Resetar" class="bt_cad"/> 
        </div>
        <div class="bloco_icones" id="bloco_icones">
        <a href="http://localhost/banco_dados/index.php" class="link_cad"><button><?php include "edic/back.svg"?></button></a>
        <a href="http://localhost/banco_dados/form_cadastrar.php"><button><?php include "edic/user.svg"?></button></a>
        </div>
    </form>
    </div>
</body>
</html>