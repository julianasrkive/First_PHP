<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Old but Gold</title>
        <!--<link href="css/bootstrap.css" rel="stylesheet" type="text/css">-->
        <link href="../oldbutgold/CSS/estrutura.css" rel="stylesheet" type="text/css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <!-- PÁGINA INICIAL E ACESSSO LOGIN -->

    
    </head>
    <body>
        <!-- Aquele background do cinema -->
        <div class="container-fluid">
            <div class="row linhaUmIndex pb-5 pt-5"></div>
        </div>

        <?php
        
        ?>
       
        <!-- AREA DE LOGIN- UNIR COM O BANCO DE DADOS-->

        <div class="tela-login">
            <form name="acesso" action="acesso.php" method="post">
                <h1>LOGIN</h1>
                <input type="text" placeholder="usuário">
                <br><br>
                <input type="password" placeholder="senha">
                <br><br>
                <input class="botao" type="submit" value="LOGIN">
                <br><br>
                             
                <p>Novo aqui? Cadastre-se!</p>
                <a href="cad_usuario.php" class="cadastro">Cadastrar</a> <!-- cadastro de usuário novo -->
                <br><br>  
                <a href="resetar.php" class="troca-senha">Esqueceu sua senha?</a> <!-- senha esquecida/troca senha -->              
            </form>

        </div>

    </body>

</html> 