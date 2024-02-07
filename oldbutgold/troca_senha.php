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
        <!-- Aquele background do cinema -->
        <div class="container-fluid">
            <div class="row linhaUmIndex pb-5 pt-5"></div>
        </div>


        <!-- CONECTANDO COM O BANCO DE DADO PARA CADASTRAR NOVA SENHA -->
        <?php
        session_start();
        include('conexao.php');
        
        if(empty($_POST['usuario']) ||  empty($_POST['senha']) ){
            
            header('Location: troca_senha.php');
            exit();
        }

        $usuario = htmlspecialchars($_POST['usuario']);
        $senha = htmlspecialchars($_POST['senha']);

        $sqli_usuario = "SELECT usuario FROM usuario WHERE usuario = '{$usuario}'";
        $retorno = $conn->query($sqli_usuario);

        $num_registro = $retorno->num_rows;

                if($num_registro>0){
                    $sqli_senha = " SELECT senha FROM usuario WHERE usuario = '{$usuario}'";
                    $retorno_senha = $conn->query($sqli_senha);
                    $senha_bd = $retorno_senha->fetch_assoc(); //PEGA AS INFORMAÇÕES EM STRING E JOGA DENTRO DE UMA VARIÁVEL



                        if(password_verify($senha, $senha_bd['senha'])){

                            $_SESSION['usuario']=$usuario;
                            header('Location: acesso.php');
                            exit();



                        }else{
                            $_SESSION['nao_autenticado'] = true;
                            header('Location: login.php');
                        }




                }else{

                        echo "<h2> USUÁRIO NÃO CADASTRADO!</h2>";
                        echo "<hr>";
                        echo "<a href='cad_usuario.php'>Tela de cadastro</a>";



                }



        ?>





            <!-- CRIANDO FORMULÁRIO PARA CADASTRAR NOVA SENHA -->

       
            <h1>Esqueceu sua senha?</h1>
            <br>
            <p>Cadastrar nova senha:</p>
       
            <form name="change" action="troca_senha.php" method="POST">
                
                <label>Usuário</label>
                <input type="text" name="nome" placeholder="usuário"><br><br>
                    
                <label>E-mail</label>
                <input type="email" name="email" placeholder="exemplo@exemplo.com"><br><br>
                
                <label>Nova senha</label>
                <input type="password" name="password" placeholder="digite senha"><br><br>
                    
                <input class="botao" type="submit" value="Cadastrar" name="cadUsuario"><br>  
            </form>
    
    
        
    </body>
    



</html>    

