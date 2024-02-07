<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cadastrar Usuário</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Old but Gold</title>
        <!--<link href="css/bootstrap.css" rel="stylesheet" type="text/css">-->
        <link href="../oldbutgold/CSS/estrutura.css" rel="stylesheet" type="text/css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </head>

    <body>
        
        <?php
        include('conexao.php');

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $usuario = htmlspecialchars($_POST['usuario']); // comentar sobre//

            $cpf = htmlspecialchars($_POST['cpf']);

            $data_nascimento = htmlspecialchars($_POST['nascimento']);
            $data_nasc_sql = date('Y-m-d', strtotime($data_nascimento)); //comentar sobre//

            $email = htmlspecialchars($_POST['email']);

            $senha = htmlspecialchars($_POST['senha']); //comentar sobre//
            $conf_senha = htmlspecialchars($_POST['conf_senha']);

                if($senha === $conf_senha){
                                
                        $sqli = "SELECT *FROM acessos where usuario = '$usuario'";
                        $retorno = $conn->query($sqli);
                        
                        $registro = $retorno->num_rows;
                                
                        if($registro){
                                    echo "<h4 style= 'color:white; text-align:center;
                                     font-size:25px'>ESTE USUÁRIO JÁ EXISTE! ESCOLHA OUTRO USUÁRIO!</h4>";

                                } else{                                   
                                    $hashsenha = password_hash($senha, PASSWORD_DEFAULT); //CRIPTOGRAFAR A SENHA (HASH)//

                                    $sqli = "INSERT INTO acessos(usuario, cpf, data_nascimento, email, senha) values ('$usuario', '$cpf', '$data_nascimento', '$email','$hashsenha') ";

                                    $retorno= $conn->query($sqli);
                                    if( $retorno==true){
                                        echo "<h5 style= 'color:white; text-align:center;
                                        font-size:25px'>CADASTRO REALIZADO COM SUCESSO!</h5>";
                                    }else{
                                        echo "<h5 style= 'color:white; text-align:center;
                                        font-size:25px'>USUARIO NÃO CADASTRADO NO BANCO DE DADOS!</h5>";

                                    }

                            
                                }               
                
                }else{
                   echo "<h4 style= 'color:white; text-align:center;
                   font-size:25px'>AS SENHAS NÃO COINCIDEM!!</h4>";
                }

        }

        ?>  



        <!-- Aquele background do cinema -->
        <div class="container-fluid">
            <div class="row linhaUmIndex pb-5 pt-5"></div>
        </div>
       
        <div class="blococadastro">        
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                <a href="login.php">Fazer Login</a><br><br>
                <h1>Cadastro de usuário:</h1><br>

                <label>Usuário</label>
                <input type="text" name="usuario" placeholder="Digite o nome de usuário" required><br><br>

                <label>CPF</label>
                <input type="number" name="cpf" placeholder="Somente Números" required><br><br>

                <label>Data de Nascimento</label>
                <input type="date" name="nascimento" placeholder="Data de nascimento" required><br><br>
                
                <!--<label>Nome Completo</label>
                <input type="text" name="nome" placeholder="Sem abreviações"><br><br> -->
                    
                <label>E-mail</label>
                <input type="email" name="email" placeholder="exemplo@exemplo.com" required><br><br>

                <label>Senha</label>
                <input type="password" name="senha" placeholder="Digite senha" required><br><br>

                <label>Confirmar senha</label>
                <input type="password" name="conf_senha" placeholder="Confirme sua senha" required><br><br>
                    
                <input class="botao" type="submit" value="Cadastrar" name="cadUsuario"><br>  
            </form><br><br>
        </div>
            
    </body>

</html>    