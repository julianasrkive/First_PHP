<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Alterar senha</title>
        <!--<link href="css/bootstrap.css" rel="stylesheet" type="text/css">-->
        <link href="../oldbutgold/CSS/estrutura.css" rel="stylesheet" type="text/css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <!-- PÁGINA INICIAL E ACESSSO LOGIN -->

    
    </head>
    <body>
        <!-- CRIANDO FORMULÁRIO PARA CADASTRAR NOVA SENHA -->
        <div class="alterar">        <h1>Esqueceu sua senha?</h1>
        <br>
            <p>Cadastrar nova senha:</p>
            <form name="resetar" action="resetar.php" method="POST">
                <label>Usuário</label>
                <input type="text" name="nome" placeholder="usuário"><br><br>
                        
                <label>E-mail</label>
                <input type="email" name="email" placeholder="exemplo@exemplo.com"><br><br>
                    
                <label>Nova senha</label>
                <input type="password" name="password" placeholder="digite senha"><br><br>
                        
                <input class="botao" type="submit" value="Cadastrar" name="cadUsuario"><br>  
            </form>
        </div>

    </body>  
